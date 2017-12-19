<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{
    public function index(){

        
    	$user = DB::table('users')->get();
    	// dd($user);

    	return view('admin.index',compact('user'));

    }
}
