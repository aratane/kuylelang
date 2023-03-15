<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isTamu
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
        if (Auth::guard('user')->check()) {
            return redirect('userdashboard')->with('success', "Kamu sudah dalam keadaan login");
        } elseif (Auth::guard('admin')->check()) {
            return redirect('admindashboard')->with('success', "Kamu sudah dalam keadaan login");
        } 
        elseif (Auth::guard('petugas')->check()) {
            return redirect('petugasdashboard')->with('success', "Kamu sudah dalam keadaan login");
        }
        return $next($request);
    }
}
