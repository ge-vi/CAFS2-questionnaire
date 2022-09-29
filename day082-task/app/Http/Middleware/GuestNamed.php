<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GuestNamed
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure(Request): (Response|RedirectResponse) $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $guestId = $request->session()->get('guest_id');

        if (is_null($guestId)) {
            return response()->view('index');
        } elseif (is_numeric($guestId) && $request->getRequestUri() === '/') {
            return redirect('/quiz');
        } else {
            return $next($request);
        }
    }
}
