<?php

namespace Neonterra\Crossadmin\Http\Middleware;

use Closure;

/**
 * The CrossadminMiddleware class.
 *
 * @package neonterra/crossadmin
 * @author  neonterra <neonterras@gmail.com>
 */
class CrossadminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Illuminate\Http\Request $request
     * @param  Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
