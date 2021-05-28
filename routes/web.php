<?php

use Illuminate\Support\Facades\Route;

//importing our controller
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
//importing laravel auth 
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//for reset password in email
Route::get('/forget-password', [ForgotPasswordController::class, 'getEmail']);
Route::post('/forget-password', [ForgotPasswordController::class, 'postEmail'])
     ->name('reset.email');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'getPassword']);
Route::post('/reset-password', [ResetPasswordController::class, 'updatePassword'])
     ->name('reset.password');

Route::middleware(['middleware' => 'PreventBackHistory'])->group(function(){
	Auth::routes(['verify' => true]);
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Admin Route Group
Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function(){
	Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
	Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
	Route::get('settings', [AdminController::class, 'settings'])->name('admin.settings');

	//for history area here
	Route::get('history', [AdminController::class, 'history'])->name('admin.history');
	Route::post('sender', [AdminController::class, 'sender']);
});

//User Route Group
Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth', 'PreventBackHistory']], function(){
	Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
	Route::get('profile', [UserController::class, 'profile'])->name('user.profile');
	Route::get('settings', [UserController::class, 'settings'])->name('user.settings');
});