<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class empRoleWiseRoute
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
        $route = Route::current()->getName();
        if(Auth::user()->role == '0'  || $route == 'dashboard')
        {
            return $next($request);
        }
        else
        {
            return redirect('error');
        }
    }
}
