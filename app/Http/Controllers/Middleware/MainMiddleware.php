<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MainMiddleware
{
    /**
     * Выполнить действие middleware.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Ваши условия для middleware
        if (auth()->user() && auth()->user()->role != 'admin') {
            // Например, если пользователь не админ, перенаправить его
            return redirect('/main');
        }

        return $next($request);
    }
}
