<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckBlocked
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
        if (auth()->check() && auth()->user()->blocked_until && now()->lessThan(auth()->user()->blocked_until)) {
            $message = 'Your account has been suspended for voilating our terms of use.  Please contact support for help.';
            auth()->logout();     
            return redirect()->route('login')->withMessage($message); 
                   }
        return $next($request);
    }
}
