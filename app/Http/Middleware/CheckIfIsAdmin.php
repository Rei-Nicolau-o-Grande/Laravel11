<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckIfIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // $user = Auth::user();
        $user = auth()->user();


        // diz ter o erro não consegue interpretar o Auth::user()
        if ($user->isAdmin()) {
            return $next($request);
        }

        return redirect()->route('home');
    }
}
