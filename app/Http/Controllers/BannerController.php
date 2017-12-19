<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // 显示页数
        $num = $request->input('num',4);
        //搜索关键字
        $keywords = $request->input('keywords','');
        if($request->has('keywords')){
            //列表显示
            $banners = DB::table('banner')->where('bname','like','%'.$keywords.'%')->paginate($num);

        }else{
            //列表显示
            $banners = DB::table('banner')->paginate($num);
        }


        $user = DB::table('users')->get();

        return view('admin.banner.index',[
               'banners' => $banners,
               'keywords' => $keywords,
               'num' => $num,
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
        return view('admin.banner.create',compact('user'));
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
        //获取参数
        $data = $request->only(['bname','blink','pic']);
        // dd($data);

        //图片上传
        if($request->hasFile('pic')){
            //获取文件的后缀名
            $suffix = $request->file('pic')->extension();
            


            //创建新的名称
            $name = uniqid('img_').'.'.$suffix;
            // dd($suffix);

            //文件夹路径
            $dir = './banner img/'.date('Y-m-d');
            //移动文件
            $request->file('pic')->move($dir,$name);
            //获取文件的路径
            $data['pic'] = trim($dir.'/'.$name,'.');

        }

        //将数据插入到数据库中
        if(DB::table('banner')->insert($data)){
            return redirect('banner')->with('msg','添加成功 !!!');

        }else{
            return back()->with('msg','添加失败 /(ㄒoㄒ)/~~');
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

        if(DB::table('banner')->where('bid',$id)->delete()){
            return back()->with('msg','删除成功');

        }else{
            return back()->with('msg',"删除失败");
        }
    }
}
