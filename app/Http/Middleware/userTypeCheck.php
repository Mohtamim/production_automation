<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userTypeCheck
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
        // if(Auth::check()){
        //     if(Auth::user()->userType == '1'){
        //         return $next($request);
        //     }else{
        //         return redirect('/');
        //     }
        // }else{
        //     return redirect('/');
        // }

        if(auth()->user()->userType == 1){
            return $next($request);
        }
        if(auth()->user()->userType == 2){
            return $next($request);
        }

    }
}
