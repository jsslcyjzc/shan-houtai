<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CreatController extends Controller
{
    //
     public function store(Request $request){
    	// dd($request->all());
    	$data = $request->only(['goods_id','num']);
    	$data['created_at'] = date('Y-m-d H:i:s');
    	$data['user_id']= session('id');
    	//将数据插入到数据表中
    	if($res = DB::table('carts')->insert($data)){
    	    return view('home.gouwu.cart');
    	}else{
    		return back()->with('msg','加入失败!!');
    	}
        
    }
}
