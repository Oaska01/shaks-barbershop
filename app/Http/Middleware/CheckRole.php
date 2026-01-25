<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // if(Auth::check())
        // {
        //     return $next($request);
        // }
        // else if(Auth::check() && Auth::user()->role == 'user')
        // {
        //     return $next($request);
        // }
        // abort(403);



        if (!Auth::check())
        {
            return redirect()->route('login.view');
        }

        if (Auth::user() ->role == 'admin' )
            {
                return $next($request);
            }

        if (Auth::user()->role != $role)
        {
            abort(403);
        }

        return $next($request);
    }
}
