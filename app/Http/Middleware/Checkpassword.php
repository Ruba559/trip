<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Checkpassword
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
        if($request->api_password != env('API_PASSWORD' , '123456')){
            return response()->json(['message'=>'unauth']);
        }
        return $next($request);
    }
}
