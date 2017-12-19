<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NubiaUIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // echo "string";
        //数量
        $num = $request->input('num',6);
        
        $keywords = $request->input('keywords','');

        if($request->has('keywords')){
            //列表显示
            $nubia = DB::table('nubiaUI')->where('title','like','%'.$keywords.'%')->paginate($num);
        }else{
            //列表显示
            $nubia = DB::table('nubiaUI')->paginate($num);
        }
         
        $user = DB::table('users')->get();
         // dd($nubia);
        return view('admin.nubiaUI.index',[
            'nubia' => $nubia,
            'num' => $num,
            'keywords' => $keywords,
            'user'=>$user

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
        $user = DB::table('users')->get();
        return view('admin.nubiaUI.create',compact('user'));
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
        // dd($request->all());

        $data = $request->only(['title','time','author','photo','pic','content']);
        // dd($data);

        //头像图片
        if($request->hasFile('photo')){
            //获取文件后缀名
            $suffix = $request->file('photo')->extension();
            // dd($suffix);
            //创建一个新的随机数名称
            $name = uniqid('photo_').'.'.$suffix;
            // dd($name);
            //文件夹路径
            $dir = './nubiaUI/'.date('Y-m-d');
            // dd($dir);
            //移动文件
            $request->file('photo')->move($dir,$name);
            //获取文件路径
            $data['photo'] = trim($dir.'/'.$name,'.');
            // dd($data['photo']);

        }



        //头像图片
        if($request->hasFile('pic')){
            //获取文件后缀名
            $suffix = $request->file('pic')->extension();
            // dd($suffix);
            //创建一个新的随机数名称
            $name = uniqid('pic_').'.'.$suffix;
            // dd($name);
            //文件夹路径
            $dir = './nubiaUI/'.date('Y-m-d');
            // dd($dir);
            //移动文件
            $request->file('pic')->move($dir,$name);
            //获取文件路径
            $data['pic'] = trim($dir.'/'.$name,'.');
            // dd($data['pic']);

        }


        //将数据库插入到数据库中
        if(DB::table('nubiaUI')->insert($data)){
            return redirect('UIluntan')->with('msg','添加成功');
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
        // echo "string";
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
        $nubia = DB::table('nubiaUI')->where('id',$id)->first();



        return view('admin.nubiaUI.edit',compact('nubia'));
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


        $data = $request->only(['title','time','author','photo','pic','content']);
        // dd($data);

        //头像图片
        if($request->hasFile('photo')){
            //获取文件后缀名
            $suffix = $request->file('photo')->extension();
            // dd($suffix);
            //创建一个新的随机数名称
            $name = uniqid('photo_').'.'.$suffix;
            // dd($name);
            //文件夹路径
            $dir = './nubiaUI/'.date('Y-m-d');
            // dd($dir);
            //移动文件
            $request->file('photo')->move($dir,$name);
            //获取文件路径
            $data['photo'] = trim($dir.'/'.$name,'.');
            // dd($data['photo']);

        }



        //头像图片
        if($request->hasFile('pic')){
            //获取文件后缀名
            $suffix = $request->file('pic')->extension();
            // dd($suffix);
            //创建一个新的随机数名称
            $name = uniqid('pic_').'.'.$suffix;
            // dd($name);
            //文件夹路径
            $dir = './nubiaUI/'.date('Y-m-d');
            // dd($dir);
            //移动文件
            $request->file('pic')->move($dir,$name);
            //获取文件路径
            $data['pic'] = trim($dir.'/'.$name,'.');
            // dd($data['pic']);

        }


        //将数据库插入到数据库中
        if(DB::table('nubiaUI')->where('id',$id)->update($data)){
            return redirect('UIluntan')->with('msg','更新成功');
        }else{
            return back()->with('msg','更新成功');
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
        if (DB::table('nubiaUI')->where('id',$id)->delete()){
             return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败');
        }
    }





    
}
