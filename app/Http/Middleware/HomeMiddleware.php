<?php

namespace App\Http\Middleware;

use Closure;

class HomeMiddleware
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
<<<<<<< HEAD

=======
>>>>>>> 7dfce4710639d5cb3a32ebcfb3a89f7ccc924942
        return $next($request);
    }
}
