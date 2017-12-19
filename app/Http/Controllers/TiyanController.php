<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TiyanController extends Controller
{
	public function tiyan()
	{

        $tiya = DB::table('tiya')->get();
        // dd($tiya);

		return view('home.Home.tiyan',compact('tiya'));
	}    
}
