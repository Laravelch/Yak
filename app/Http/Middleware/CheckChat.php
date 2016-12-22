<?php

namespace App\Http\Middleware;

use Closure;

class CheckChat
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
        if(!session()->has('docuser') && !session()->has('homeuser')){
            return redirect('/home/doctor/login');
        }
        return $next($request);
    }
}
