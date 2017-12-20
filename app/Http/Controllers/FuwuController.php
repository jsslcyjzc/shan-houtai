<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FuwuController extends Controller
{
    public function fuwu()
    {


    	$fw = DB::table('fw')->get();
    	
    	return view('home.Home.fuwu',compact('fw'));
    }
}
