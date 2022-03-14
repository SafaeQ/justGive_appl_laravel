<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIfAssociation
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
        // echo(auth()->user()->role.'-'."association");
        if(!auth()->check() || auth()->user()->role != "association"){
            return redirect()->route('home');
        }
        return $next($request);
    }
}
