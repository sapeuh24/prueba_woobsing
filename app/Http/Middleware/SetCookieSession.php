<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SetCookieSession
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
        $user = Auth::user();
        $origin_ip = $_SERVER['REMOTE_ADDR'];
        if ($user->role_id == 1 && $origin_ip == "127.0.0.1") {
            $nueva_cookie = cookie()->forever('origin_sesion', $origin_ip);
            return $next($request)->withCookie($nueva_cookie);
        } else {
            return $next($request);
        }
    }
}