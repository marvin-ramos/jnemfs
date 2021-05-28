<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//importing events
use App\Events\HistorySubmitted;

class AdminController extends Controller
{
    //for Dashboard Area
    public function index() {
        if(session('success_message')) {
            Alert::success('Good Job','Account Successfully created');
        }

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

    //for history area is here
    public function history() {
        return view('history');
    }

    public function sender(Request $request) {
        // echo 'xxxx';
        $text = request()->text;
        event(new HistorySubmitted($text));
    }
}
