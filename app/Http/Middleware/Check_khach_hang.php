<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class Check_khach_hang
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
        if (Session::has('Ma_khach_hang')) {
            return $next($request);
        }
        return redirect()->route('khach_hang_view_login');
    }
}
