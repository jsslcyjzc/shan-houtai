<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuwuController extends Controller
{
    public function fuwu()
    {
    	return view('home.Home.fuwu');
    }
}
