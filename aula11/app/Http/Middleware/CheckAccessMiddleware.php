<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAccessMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->route('action') == 'checkAccess') {
            abort(403, 'Você não tem permissão para acessar esta rota.');
        }

        return $next($request);
    }
}
