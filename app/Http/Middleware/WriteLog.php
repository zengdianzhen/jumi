<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class WriteLog
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //中间层写入日志
        $input = $request->all();
        // create a log channel
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('path/to/your.log', Logger::WARNING));

// add records to the log
        $log->warning(json_encode($input, JSON_UNESCAPED_UNICODE));
        $log->error('Bar');

        return $next($request);
    }
}