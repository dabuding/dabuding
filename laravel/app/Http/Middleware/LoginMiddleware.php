<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
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
        //获取session信息
        if(!session('id')){
            //如果没有session的id的信息  直接跳转到其他页面
            return redirect('/');
        }
        return $next($request);
    }
}
