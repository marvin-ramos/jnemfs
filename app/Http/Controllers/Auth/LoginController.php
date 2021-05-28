<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

//importing the request
use Illuminate\Http\Request;

//importing package
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

//importing models
use App\Models\History;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    //dito tayu mag specify ng user natin kung admin or user sya
    protected function redirect() {
        if( Auth()->user()->role == 1) {
            return route('admin.dashboard');
        } elseif( Auth()->user()->role == 2) {
            return route('user.dashboard');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   
        $this->middleware('guest')->except('logout');
    }

    //dito tayu gagawa ng logic sa login para sa ating page.
    public function login(Request $request) {
        $input = $request->all();
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //dito eh execute ang login capability in laravel
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {

            $remark = 'has Logged In to the system at';
            $id = auth()->user()->id;

            $records = History::create([
                'user_id' => $id,
                'remarks' => $remark,
                'created_at' => Carbon::now()
            ]);

            //dri niya eh redirect kung unsa na role sya 
            if(Auth()->user()->role === 1) {

                Alert::success('Access Granted', 'Welcome Administrator');
                return redirect()
                     ->route('admin.dashboard');

            } elseif (auth()->user()->role === 2) {

                Alert::success('Access Granted', 'Welcome User');
               return redirect()
                     ->route('user.dashboard'); 
            }

        } else {

            Alert::error('Access Denied', 'Email or Password does not match');
            return redirect()->route('login');
        }
    }
} 

