<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $num = $request->input('num',5);
        $keywords = $request->input('keywords','');

        //关键字搜索
        if ($request->has('keywords')) {
            //列表显示
            $users = DB::table('users')
            ->where('username','like','%'.$keywords.'%')
            ->paginate($num);
        }else{
           $users = DB::table('users')->paginate($num); 
        }
        
       //解释模板
        return view('admin.user.index',[
       
           'users'=>$users,
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
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['username','password','email','phone','qq','profile']);
        // dd($data);
         
        //加密密码
        $data['password'] = Hash::make($data['password']);

        //文件上传
        if ($request->hasFile('profile')) {
            //获取文件的后缀名
            $suffix = $request->file('profile')->extension();

            //创建一个新的随机名称
            $name = uniqid('img_').'.'.$suffix;
            //文件夹路径
            $dir = './uploads/'.date('Y-m-d');
            //移动文件
            $request->file('profile')->move($dir,$name);
            //获取文件的路径
            $data['profile'] = trim($dir.'/'.$name,'.');
        }


        //将数据库插入到数据库中
        if (DB::table('users')->insert($data)) {
            return redirect('/user')->with('msg','添加成功');
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
        $user = DB::table('users')->where('id',$id)->first();

        return view('admin.user.edit',['user'=>$user]);

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
        //获取数据
        $data = $request->only(['username','email','password','phone','qq','profile']);
        //图片上传
        //文件上传
         if ($request->hasFile('profile')) {
            //获取文件的后缀名
            $suffix = $request->file('profile')->extension();

            //创建一个新的随机名称
            $name = uniqid('img_').'.'.$suffix;
            //文件夹路径
            $dir = './uploads/'.date('Y-m-d');
            //移动文件
            $request->file('profile')->move($dir,$name);
            //获取文件的路径
            $data['profile'] = trim($dir.'/'.$name,'.');
        }

        //更新
        if (DB::table('users')->where('id',$id)->update($data)) {
            return redirect('/user')->with('msg','更新成功');
        }else{
            return back()->with('msg','更新失败');
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
        //删除
        // dd($id);
        if (DB::table('users')->where('id',$id)->delete()) {
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败!!');
        }
    }

    public function signup(){
        return view('home.zhuce');
    }

    public function dosign(Request $request){


        //获取用户的信息
        $data = $request->only(['phone','password','verify']);
        $data['password'] = Hash::make($data['password']);
        $data['verify'] = str_random(30);

        //插入数据
        if(DB::table('useres')->insert($data)) {

            return redirect('/Home/login')->with('msg','注册成功,一封激活邮件已经发送到您的邮箱,请确认激活!!');
        } else {
            return back()->with('msg','注册失败!!');
        }
    }

    public function confirm($id)
    {
        //根据id来查找数据库中的用户信息
        $user = DB::table('useres')->where('verify',$id)->first();
        if(empty($user)) {
            return redirect('/')->with('msg','激活失败!!请重新激活');
        }
        //更新用户的状态
        $data = ['status'=>1];
        $res = DB::table('useres')->where('id',$user->id)->update($data);

        if($res) {
            return redirect('/')->with('msg','激活成功');
        }else{
            return redirect('/')->with('msg','激活失败!!');
        }
    }
}
