<?php

namespace App\Http\Middleware;

use App\Http\Controllers\MemberSessionController;
use App\Models\MemberSession;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TinnAuth
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
//        dd(session('member_token'), session('session_key'));
        if (!session('member_token') || !session('session_key')) {
            return redirect()->route('auth.logout');
        }

//        dd(session('member_token'), session('session_key'));
        $checkAuth = MemberSessionController::verify_session_auth(session('session_key'), session('member_token'));
        if (!$checkAuth) {
            return redirect()->route('auth.logout');
        }
        return $next($request);
    }
}
