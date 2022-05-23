<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class backToDashboard
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
        if (Auth::check()) {
            if(Auth::user()->hasRole('Customer')) {
                return redirect(route('/customer/dashboard'));
            }
            else if(Auth::user()->hasRole('Merchant')) {
                return redirect(route('merchant_dashboard'));
            }
        }
        return $next($request);
    }
}
