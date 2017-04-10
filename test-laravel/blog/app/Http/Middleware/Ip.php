<?php namespace App\Http\Middleware;

use Closure;

class Ip
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

        if (rand(0, 9)>4) {
            return $next($request);
        } else {
            return abort(500);
        }

    }
}
