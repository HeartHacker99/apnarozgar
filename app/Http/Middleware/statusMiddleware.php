<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class statusMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if(Auth::user()->email)
            {
                dd("hi");
            }
        return $next($request);
    }
}
