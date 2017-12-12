<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
    	// echo "string";
    	return view('home.index');
    }


    public function doindex(){
    	// echo "string";
    	return view('home.layout.home');
    }


    public function nubiaUI(){
    	return view('home.nubiaUI.nubiaUI');
    }

<<<<<<< HEAD
=======


    public function gouwu(){
        return view('home.gouwu.gouwu');
    }



    public function shouji(){
        return view('home.shouji.shouji');
    }
>>>>>>> badc5c7d65dc93f9cf23dad7cad80f15a9548f1b
}