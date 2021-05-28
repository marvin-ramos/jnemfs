<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //for Dashboard Area
    public function index() {
    	return view('dashboard');
    }

    //for Profile Area
    public function profile() {
    	return view('profile');
    }

    //for Settings Area    
    public function settings() {
    	return view('settings');
    }
}
