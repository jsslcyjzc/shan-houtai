<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LianxiController extends Controller
{
    public function lianxi()
    {

       $guanyu = DB::table('guanyu')->get();

    	return view('home.Home.lianxi',compact('guanyu'));
    }
}
