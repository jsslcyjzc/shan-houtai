<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    //
    public function index(){
        // echo "string";
        $banner =DB::table('banner')->where('path',1)->get();
        return view('home.index',['banner'=>$banner]);
    }




    public function doindex(){
    	// echo "string";
    	return view('home.layout.home');
    }


    public function shequ(){
        // echo "string";
        $shequ = DB::table('nubiaUI')->paginate();

        // dd($shequ);



    	return view('home.nubiaUI.nubiaUI',compact('shequ'));
    }



    public function gouwu(){
        return view('home.gouwu.gouwu');
    }



    public function shouji(){
        return view('home.shouji.shouji');
    }

}