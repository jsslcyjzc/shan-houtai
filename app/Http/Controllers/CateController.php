<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //读取分类的信息
        $cates = DB::select("select id,name,pid,concat(path,'_',id) as paths from cates order by paths");
        //修改分类的名称
        foreach ($cates as $key => $value) {
            //根据path来进行数据分隔判断层级数 
            $count = count(explode('_', $value->paths))-2;

            $value->name = str_repeat('|-----', $count).$value->name;
        }
        

        $user = DB::table('users')->get();
        //解析模板
        return view('admin.cate.index',['cates'=>$cates,'user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //读取分类信息
        $cates = DB::table('cates')->get();
        $user = DB::table('users')->get();
        return view('admin.cate.create',['cates'=>$cates,'user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取参数数据
        $data = $request->except(['_token']);

        //判断是否为顶级分类
        if ($data['pid'] ==0) {
            $data['path'] = '0';
        }else{
         //读取父级分类的信息
            $p = DB::table('cates')->where('id',$data['pid'])->first();
            $data['path'] = $p->path.'_'.$p->id;
        }

        //将数据插入到数据库中
        if (DB::table('cates')->insert($data)) {
            return redirect('/cate')->with('msg','添加成功');
        }else{
            return back()->with('msg','添加失败!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $cates = DB::table('cates')->where('id',$id)->first();
        return view('home.layout.home',compact('cates'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //修改分类
        // return view('admin.cate.edit');
        $p = DB::table('cates')->where('id',$id)->first();
        return view('admin.cate.edit',compact('p'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $cate = $request->only(['name']);

         //将数据插入到数据库中
        if (DB::table('cates')->where('id',$id)->update($cate)) {
            return redirect('cate')->with('msg','更新成功');
        }else{
            return back()->with('msg','更新失败!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //获取当前的分类信息
        $cate = DB::table('cates')->where('id',$id)->first();
        //拼接path
        $path = $cate->path .'_'.$cate->id;
        //删除字分类
        $res = DB::table('cates')->where('path','like',$path.'%')->delete();
        //删除自己
        if (DB::table('cates')->where('id',$id)->delete()) {
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败!!');
        }
    }
}
