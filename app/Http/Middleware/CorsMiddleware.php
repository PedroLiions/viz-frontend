<?php

namespace App\Http\Middleware;

use Closure;

class CorsMiddleware
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
        if ($request->isMethod('OPTIONS')) {
            $headers['Access-Control-Allow-Origin'] = '*';
            $headers['Access-Control-Allow-Headers'] = '*';
            $headers['Access-Control-Allow-Methods'] = '*';

            return response()->json('{"method":"OPTIONS"}', 200, $headers);
        }

        $response = $next($request);
        $response->headers->set('Access-Control-Expose-Headers', 'Content-Disposition');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, PATCH, DELETE, OPTIONS');
        $response->headers->set('Access-Control-Max-Age', '86400');

        //return $response->withHeaders($headers);
        return $response;
    }
}
