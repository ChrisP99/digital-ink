<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            //If the user has been authenticated (i.e, they're already logged in)
            return redirect('/profile');
            // Redirect them to their profile, if they want to make a new account, they'll need to logout.

        }
        return $next($request);
    }
}
