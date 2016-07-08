<?php

namespace App\Http\Middleware;

use Closure;

class TestMiddleware
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
        //记录当前请求的ip地址
        //获取ip
        $ip = $request->ip();
        $path = $request->path();
        //将ip地址写入到名字为ips.txt文件中
        file_put_contents('./ips.txt', $ip.'-------'.$path."\r\n", FILE_APPEND);

        return $next($request);
    }
}
