<?php

namespace App\Http\Middleware;

use Closure;

class SoEuPossoMiddleware
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
        if($request->nome === "cecilia") {
            return $next($request);
        }
        // return redirect('/login');
        return redirect()->route('login');
    }
}
