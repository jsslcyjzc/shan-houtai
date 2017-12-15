<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CartController extends Controller
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

    public function indexa(){
    	// 读取购物车中的内容
    	$id = session('id');
    	//读取表
    	$goods = DB::table('carts')->where('user_id',$id)->get();
    	// dd($goods);
    	//根据id得到商品的详细信息
    	foreach ($goods as $key => $value) {
    		$value->detail = DB::table('goods')->where('id',$value->goods_id)->first();
    		$value->pic = DB::table('goods_pic')->where('goods_id',$value->goods_id)->value('pic');
    	}
    	// dd($goods);
    	//解析模板
    	return view('home.gouwu.gouwu',compact('goods'));
    }
    public function delete(Requsest $request)
    {
       //获取id
    	$id = $request->input('cid');
    	// echo $id;
      //删除该商品
    	if (DB::table('carts')->where('id',$id)->delete()) {
    		echo '1';
    	}else{
    		echo '0';
    	}
    }


}
