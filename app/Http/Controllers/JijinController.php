<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JijinController extends Controller
{
    public function jijin()
    {
    	return view('home.Home.jijin');
    }
}
