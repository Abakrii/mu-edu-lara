<?php

namespace App\Http\Middleware;

use Closure;

class CheckGenderMiddle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();
        if ($user->gender =='' || $user->gender==null)
        {
            return redirect()->route('check');
        }
        return $next($request);
    }
}
