<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PinpaiController extends Controller
{
    public function pinpai(){

        $guanyu = DB::table('guanyu')->get();

    	return view('home.Home.pinpai',compact('guanyu'));
    }
}
