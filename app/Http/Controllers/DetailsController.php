<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DetailsController extends Controller
{
    //
    public function details($id)
    {
    	//读取商品的详细信息
        $goods = DB::table('goods')->where('id',$id)->first();
        //读取商品的图片信息
        $goods_pic = DB::table('goods_pic')->where('goods_id', $id)->get();

    	return view('home.details',compact('goods','goods_pic'));	
    }
}
