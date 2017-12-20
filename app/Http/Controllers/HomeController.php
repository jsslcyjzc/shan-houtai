<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    //

    public function resetId($id){
        $this->flush();
        $this->id = $id;
        if($this->hasSession()){
           $this->loadSession();
        }


        return view('home.index',compact('yonghu','id'));
    }
    public function index(){
        // echo "string";
        $banner =DB::table('banner')->where('path',1)->get();
        // dd($banner);

        //读取商品的详细信息
        $goods = DB::table('goods')
        ->where('status',1)
        ->select('id','title','price')
        ->get();
        // dd($goods);
        //商品的图片加入
        foreach ($goods as $key => &$value) {
            $value->pic = DB::table('goods_pic')->where('goods_id',$value->id)->value('pic');
        }




        return view('home.index',[
            'banner'=>$banner,
            'goods'=>$goods
        ]);
    }


    




    public function doindex(){
    	// echo "string";

    	return view('home.layout.home');
    }


    public function shequ(){
        // echo "string";
        $shequ = DB::table('nubiaUI')->paginate();

        $banner = DB::table('banner')->get();
        // dd($banner);

        // dd($shequ);

    	return view('home.nubiaUI.nubiaUI',compact('shequ','banner'));
    }



    public function gouwu(){
        return view('home.gouwu.gouwu');
    }



    public function shouji(){



        return view('home.shouji.shouji',compact('banner'));
    }



    public function peijian(){
        return view('home.peijian.peijian');
    }









}