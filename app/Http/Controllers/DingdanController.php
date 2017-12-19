<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DingdanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //读取收货地址
        // dd(88);
        $addresses = DB::table('addresses')->where('user_id', session('id'))->get();
        foreach ($addresses as $key => &$value) {
            $value->pname = DB::table('areas')->where('id',$value->province)->value('area_name');
            $value->cname = DB::table('areas')->where('id',$value->city)->value('area_name');
            $value->xname = DB::table('areas')->where('id',$value->xian)->value('area_name');
        }
        


        //读取购物车中的内容
        $id = session('id');
        $goods = DB::table('carts')->where('user_id', $id)->get();
        //根据id来获取商品的详细信息
        foreach ($goods as $key => &$value) {
            $value->detail = DB::table('goods')->where('id', $value->goods_id)->first();
            $value->pic = DB::table('goods_pic')->where('goods_id', $value->goods_id)->value('pic');
        }

        


        // dd($total);
        return view('home.dingdan.cofirm',compact('addresses','goodsData','total','goods'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
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
    }




    public function zhifu(){
        // echo "string";

        //读取购物车中的内容
        $id = session('id');
        $goods = DB::table('carts')->where('user_id', $id)->get();
        //根据id来获取商品的详细信息
        foreach ($goods as $key => &$value) {
            $value->detail = DB::table('goods')->where('id', $value->goods_id)->first();
            $value->pic = DB::table('goods_pic')->where('goods_id', $value->goods_id)->value('pic');
        }




 
        return view('home.zhifu.zhifu',compact('goods'));
    }







}
