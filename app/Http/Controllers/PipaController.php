<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PipaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $num = $request->input('num',4);
        $keywords = $request->input('keywords','');
        if ($request->has('keywords')) {
            //列表显示
            $guanyu = DB::table('guanyu')->where('title','like','%'.$keywords.'%')->paginate($num);
        }else{
           //列表显示
            $guanyu = DB::table('guanyu')->paginate($num);
        }
        

        return view('admin.guanyu.index',[
           'guanyu' => $guanyu,
           'keywords' => $keywords,
           'num' => $num

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.guanyu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->only(['title','time','content','status']);
        // dd($data);

        //头像图片
        if($request->hasFile('pic')){
            //获取文件后缀名
            $suffix = $request->file('pic')->extension();
            // dd($suffix);
            //创建一个新的随机数名称
            $name = uniqid('pic_').'.'.$suffix;
            // dd($name);
            //文件夹路径
            $dir = './guanyu/'.date('Y-m-d');
            // dd($dir);
            //移动文件
            $request->file('pic')->move($dir,$name);
            //获取文件路径
            $data['pic'] = trim($dir.'/'.$name,'.');
            //dd($data['pic']);

        }



        //头像图片
        if($request->hasFile('img')){
            //获取文件后缀名
            $suffix = $request->file('img')->extension();
            // dd($suffix);
            //创建一个新的随机数名称
            $name = uniqid('img_').'.'.$suffix;
            // dd($name);
            //文件夹路径
            $dir = './guanyu/'.date('Y-m-d');
            // dd($dir);
            //移动文件
            $request->file('img')->move($dir,$name);
            //获取文件路径
            $data['img'] = trim($dir.'/'.$name,'.');
            // dd($data['img']);

        }


        //将数据库插入到数据库中
        if(DB::table('guanyu')->insert($data)){
            return redirect('guanyu')->with('msg','添加成功');
        }else{
            return back()->with('msg','添加失败');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //读取当前用户信息
        $guanyu = DB::table('guanyu')->where('id',$id)->first();

        return view('admin.guanyu.edit',['guanyu'=>$guanyu]);
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
        //获取参数
        $data = $request->only(['title','content','time','contop']);
        $data = $request->only(['title','content',]);
        $status = $request->only(['status']);
        //针对图片处理
        if ($request->hasFile('pic')) {
            //获取文件的后缀名
            $suffix = $request->file('pic')->extension();
            //创建一个新的随机名称
            $name = uniqid('img_').'.'.$suffix;
            //文件夹路径
            $dir = './uploads'.date('Y-m-d');
            //移动文件
            $request->file('pic')->move($dir,$name);
            //获取文件的路径
            $data['pic'] = trim($dir.''.$name,'.');
        }


        
        //将数据插入到数据库中
        if (DB::table('guanyu')->where('id',$id)->update($data)) {
            return redirect('guanyu')->with('msg','更新成功');
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
        //
        //执行删除
        if (DB::table('guanyu')->where('id',$id)->delete()) {
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败!!');
        }
    }
}
