<?php

namespace App\Http\Middleware\Auth;

use Closure;

class Nologin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!($request->session()->has('login'))){
            return $next($request);
        }
        return redirect()->back();
    }
}
