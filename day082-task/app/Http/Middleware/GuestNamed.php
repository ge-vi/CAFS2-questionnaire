<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GuestNamed
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
        if ($request->session()->get('guest_id')) {
            // named guest should not get to first page
            return $request->getRequestUri() === '/' ? redirect('/quiz') :$next($request);
        }
        return redirect('/');
    }
}
