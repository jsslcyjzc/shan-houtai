<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GuanController extends Controller
{
    //
    public function guanyu()
    {
    	$guanyu = DB::table('guanyu')->get();
        //dd($guanyu);

    	return view('home.Home.guanyu',compact('guanyu'));
    }
}
