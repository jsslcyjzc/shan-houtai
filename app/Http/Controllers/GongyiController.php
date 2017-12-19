<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GongyiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //echo "string";
        //数量
        $num = $request->input('num',6);

        $keywords = $request->input('keywords','');

        if($request->has('keywords')){
            //列表显示
            $gongyi = DB::table('gongyi')->where('title','like','%'.$keywords.'%')->paginate($num);
        }else{
            //列表显示
            $gongyi = DB::table('gongyi')->paginate($num);
        }


        //dd($gongyi);
        return view('admin.gongyi.index',[
            'gongyi' => $gongyi,
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
        return view('admin.gongyi.create');
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
        $data = $request->only(['title','time','author','images','content']);
        //dd($data);

        //头像图片
        if($request->hasFile('images')){
            //获取文件后缀名
            $suffix = $request->file('images')->extension();
            // dd($suffix);
            //创建一个新的随机数名称
            $name = uniqid('images_').'.'.$suffix;
            // dd($name);
            //文件夹路径
            $dir = './gongyi/'.date('Y-m-d');
            // dd($dir);
            //移动文件
            $request->file('images')->move($dir,$name);
            //获取文件路径
            $data['images'] = trim($dir.'/'.$name,'.');

        }



        //头像图片
        // if($request->hasFile('banner')){
        //     //获取文件后缀名
        //     $suffix = $request->file('banner')->extension();
        //     // dd($suffix);
        //     //创建一个新的随机数名称
        //     $name = uniqid('banner_').'.'.$suffix;
        //     // dd($name);
        //     //文件夹路径
        //     $dir = './gongyi/'.date('Y-m-d');
        //     // dd($dir);
        //     //移动文件
        //     $request->file('banner')->move($dir,$name);
        //     //获取文件路径
        //     $data['banner'] = trim($dir.'/'.$name,'.');
        //     // dd($data['banner']);

        // }


        //将数据库插入到数据库中
        if(DB::table('gongyi')->insert($data)){
            return redirect('gongyis')->with('msg','添加成功');
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
        //读取到当前用户信息
        $gongyi = DB::table('gongyi')->where('id',$id)->first();



        return view('admin.gongyi.edit',compact('gongyi')); 
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
        $data = $request->only(['title','time','author','images','content']);
        //dd($data);
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
        if(DB::table('gongyi')->where('id',$id)->update($data)){
            return redirect('gongyis')->with('msg','更新成功!!');
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
        if (DB::table('gongyi')->where('id',$id)->delete())
            {
                return back()->with('msg','删除成功!!');
            }else{
                return back()->with('msg','删除失败!!');
            }
    }
}
