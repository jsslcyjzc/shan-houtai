<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WangjiController extends Controller
{
    public function wangji()
    {
    	return view('home.Home.wangji');
    }
    public function wangji1()
    {
    	return view('home.Home.wangji1');
    }
}
