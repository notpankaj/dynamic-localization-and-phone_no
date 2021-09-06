<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLocale
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

        // dd(session()->has('applocale'));
        if(session()->has('applocale')){
            // dd(session()->get("applocale"));
            app()->setlocale(session()->get("applocale"));
            
        }else{
            dd("HERE");
            app()->setlocale('en');
        }
        return $next($request);
    }
}
