<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LianxiController extends Controller
{
    public function lianxi()
    {
    	return view('home.Home.lianxi');
    }
}
