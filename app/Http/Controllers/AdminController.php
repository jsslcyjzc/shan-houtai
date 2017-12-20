<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use yhd;
use DB;
class AdminController extends Controller
{
    public function index(){


    	// $user = DB::table('users')->get();

    	return view('admin.index');

    }
}
