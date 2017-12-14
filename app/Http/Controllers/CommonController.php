<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    //
    public function message(Request $request)
    {
    	//手机号
    	$phone = $request->input('moblie');
    	//标题
    	$web = 'random';
    	//手机的验证码
    	$code = rand(100000,999999);
    	//正式 向三方平台发送请求
    	//$res = file_get_contents('http://www.xiaohigh.com/message/index.php?to='.$phone.'&$class=123456&web='.$web.'&code='.$code);

    	//将验证码存储起来
    	session(['vcode'=>$code]);

    	//解析json字符串
    	//$data = json_decode($res, true);

    	//测试
    	$data['resp']['respCode'] = '000000';

    	if ($data['resp']['respCode'] == '000000') {
    		//'0'表示发送成功
    		return response()->json(['data'=>['vcode'=>$code],'status'=>'1','msg'=>'发送成功']);
    	}else{
    		//'1'表示发送失败
    		return response()->json(['data'=>'','status'=>'0','msg'=>'发送失败']);
    	}

    }
}
