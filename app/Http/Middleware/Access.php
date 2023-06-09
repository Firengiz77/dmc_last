<?php

namespace App\Http\Middleware;
use Closure;

class Access
{
    public function handle($request, Closure $next)
    {
        return $next($request)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', '*')
            ->header('Access-Control-Allow-Credentials', true)
            ->header('Access-Control-Allow-Headers', 'X-CSRF-Token, token , Content-Type, X-Auth-Token, Authorization, Origin',301)
            ->header('Accept', 'application/json');
    }
}