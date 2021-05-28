<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

//importing laravel auth 
use Illuminate\Support\Facades\Auth;

class isUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if( Auth::check() && Auth::user()->role == 2 ) {
            return $next($request);
        } else {
            return redirect()
                 ->route('login');
        }  
    }
}