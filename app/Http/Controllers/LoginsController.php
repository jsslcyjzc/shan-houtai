<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;

class LoginsController extends Controller
{
    public function login()
    {

    	return view('home.Home.login');
    }

    public function dologin(Request $request){
    	//提取参数
        // $data = $request->all();
        $data = $request->except(['_token']);
        // dd($data);

        //检测数据是否正确
        $user = DB::table('useres')->where('phone',$data['phone'])->first();

        // dd($user);
        //判断有没有这个用户
        if (empty($user)) {
        	return back()->with('msg','登录失败!!');
        }

        //校验密码
        if (Hash::check($data['password'], $user->password)) {
        	//写入session信息
        	session(['id'=>$user->id]);
        	session(['username'=>$user->username]);

        	//登录成功
            return redirect('/Home/login')->with('msg','登录成功');
        }
        return back()->with('msg','登录失败!!');
    }
    public function login1()
    {
    	return view('home.Home.login1');
    }
}
