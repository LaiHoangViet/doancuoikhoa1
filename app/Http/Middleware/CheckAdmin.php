<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class checkAdmin
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
        if(Session::has('Ma_admin')){
            return $next($request);
        }
        return redirect()->route('Admin_view_login')->with('error','Bạn phải đăng nhập đã');
    }

}
