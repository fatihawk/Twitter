<?php

namespace App\Http\Middleware;

use Closure;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     * 
     * https://stackoverflow.com/a/43902371
     */
    public function handle($request, Closure $next, ...$roles)
    {
        $user = $request->user();

        if ($user->hasRole($roles)) {
            return $next($request);
        }
        return redirect()->back();
    }
}
