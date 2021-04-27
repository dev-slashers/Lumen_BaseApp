<?php

namespace App\Http\Middleware;

use Closure;
use Emarref\Jwt\Jwt;


class JwtMiddleware
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
        $jwt = new Jwt();
        $currentTime = new \DateTime();
        $header = $request->bearerToken();
        $payload = json_decode($jwt->deserialize($header)->getPayload()->jsonSerialize(), true);
        $dateDiff = $payload["exp"] - $currentTime->getTimestamp();

        if($dateDiff >= 0) {
            return $next($request);
        }else {
            return redirect('/hello');
        }

    }
}
