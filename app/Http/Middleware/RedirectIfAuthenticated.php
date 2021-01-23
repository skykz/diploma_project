<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next,  $guard = null)
    {
//        $guards = empty($guards) ? [null] : $guards;
//
//        foreach ($guards as $guard) {
//            if (Auth::guard($guard)->check()) {
//                return redirect(RouteServiceProvider::HOME);
//            }
//        }
//
//        return $next($request);

        if (Auth::guard($guard)->check()) {
            $role = Auth::user()->role;
            print($role);
            switch ($role) {
                case 'adviser':
                    return redirect('/adviser_dashboard');
                    break;
                case 'student':
                    return redirect('/student_dashboard');
                    break;

                default:
                    return redirect('/home');
                    break;
            }
        }
        return $next($request);
    }
}
