<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //数量
        $num = $request->input('num',6);
        
        $keywords = $request->input('keywords','');

        if($request->has('keywords')){
            //列表显示
            $fw = DB::table('fw')->where('title','like','%'.$keywords.'%')->paginate($num);
        }else{
            //列表显示
            $fw = DB::table('fw')->paginate($num);
        }
         

         // dd($nubia);
        return view('admin.fw.index',[
            'fw' => $fw,
            'num' => $num,
            'keywords' => $keywords

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


        return view('admin.fw.create');
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
        $data = $request->only(['title','pic','img','content']);
        //dd($data);

        //头像图片
        if($request->hasFile('pic')){
            //获取文件后缀名
            $suffix = $request->file('pic')->extension();
            // dd($suffix);
            //创建一个新的随机数名称
            $name = uniqid('pic_').'.'.$suffix;
            // dd($name);
            //文件夹路径
            $dir = './fw/'.date('Y-m-d');
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
            $dir = './fw/'.date('Y-m-d');
            // dd($dir);
            //移动文件
            $request->file('img')->move($dir,$name);
            //获取文件路径
            $data['img'] = trim($dir.'/'.$name,'.');
            // dd($data['img']);

        }


        //将数据库插入到数据库中
        if(DB::table('fw')->insert($data)){
            return redirect('fwd')->with('msg','添加成功');
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
        //echo "string";
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
        if (DB::table('fw')->where('id',$id)->delete()){
             return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败');
        }
    }
}
