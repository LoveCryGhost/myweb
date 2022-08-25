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
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            switch ($guard) {

                case "admin":
                    if (Auth::guard($guard)->check()) {

                        return redirect()->route('admin.dashboard.index');
                    }
                    break;

                case "member":
                    if (Auth::guard($guard)->check()) {
                        return redirect()->route('member.dashboard.index');
                    }
                    break;

                case "staff":
                    if (Auth::guard($guard)->check()) {

                        return redirect()->route('staff.dashboard.index');
                    }
                    break;

                default:
                    if (Auth::guard($guard)->check()) {
                        //return redirect('/');
                        return redirect()->route('user.dashboard.index');
                    }

                    break;
            }

            return $next($request);
        }
    }
}
