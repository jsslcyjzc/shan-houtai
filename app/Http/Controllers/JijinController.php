<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JijinController extends Controller
{
    public function jijin()
    {

       $gongyi = DB::table('gongyi')->get();

    	return view('home.Home.jijin',compact('gongyi'));
    }
}
