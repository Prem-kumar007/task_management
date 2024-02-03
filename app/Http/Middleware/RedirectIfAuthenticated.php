<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        if (auth()->check()) {
            // Set Cache-Control header to prevent caching
            return response()
                ->view('authentication.login')
                ->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');
        }

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect()->route('dashboard');
                // return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
