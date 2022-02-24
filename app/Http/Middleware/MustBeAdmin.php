<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAdmin
{
    public function handle($request, Closure $next)
    {
        $user = $request->user();
        if ($user && $user->isAdmin){

            return $next($request);
        }
        abort(404,'the page belongs to admin');
    }
}
