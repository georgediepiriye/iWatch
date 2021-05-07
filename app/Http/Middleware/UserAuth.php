<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
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
        //sends user directly to home page if user is already logged in
        if($request->path()==='login' && $request->session()->has('user')){
           return redirect('/');

        }

        if($request->path()==='myorders' && $request->session()->has('user')===false){
            return redirect('/login');
 
         }
        return $next($request);
    }
}
