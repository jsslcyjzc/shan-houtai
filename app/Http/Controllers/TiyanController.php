<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiyanController extends Controller
{
	public function tiyan()
	{
		return view('home.Home.tiyan');
	}    
}
