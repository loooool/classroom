<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Verification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     *
     * Phone number verification MiddleWare
     *
     * if not verified will redirect to @route(verify)
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->verified == 0) {
                return redirect('verify');
            } elseif (Auth::user()->verified == 1)
                return $next($request);
            }
            return null;
        }


}
