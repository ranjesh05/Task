<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)

    {
        if(Auth::user()->user_group_id == 2){
            return $next($request);
        }
        if(Auth::user()->user_group_id== 1)
        {
          return  redirect()->route('super-admin.dashboard');
        }
      
        abort(404);
    }
}
