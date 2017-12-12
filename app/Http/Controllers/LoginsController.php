<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginsController extends Controller
{
    public function login()
    {
    	return view('home.Home.login');
    }
    public function login1()
    {
    	return view('home.Home.login1');
    }
}
