<?php

namespace App\Http\Middleware;

use Closure;
use Http\Client\Exception\HttpException;

class IsAdmin
{

    public function handle($request, Closure $next)
    {
        // Haal gebruiker op uit de request
        if ($user = $request->user()) {

            // Check of deze is_admin op 1 heeft gestaan
            if ($user->is_admin === 1) {

                // Zo ja, ga naar $next middlewar
                return $next($request);
            }
            // Anders toegang weigeren
            abort(403);

        }

    }
}
