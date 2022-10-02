<?php

namespace App\Http\Middleware;
use Auth;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->role === "admin"){
            return $next($request);
        }
        return redirect('errors');
        
    }
}
