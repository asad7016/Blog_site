<?php

namespace asad\Http\Middleware;

use Closure;
use Log;

class LoggerMiddleware
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
        Log::info("Log entry form LoggerMiddleware");
        return $next($request);
    }
}
