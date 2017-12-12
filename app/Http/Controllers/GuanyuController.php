<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuanyuController extends Controller
{
    public  function guanyu()
    {
    	return view('home.Home.guanyu');
    }
}
