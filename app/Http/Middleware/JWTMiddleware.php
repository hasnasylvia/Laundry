<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Exception;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class JWTMiddleware extends BaseMiddleware
{
    public function handle($request, Closure $next)
    {
        try{
            $user = JWTAuth::parseToken()->authenticate();
        }catch (Exception $e){
            if ($e instanceof\Tymon\JWTAuth\Exceptions\TokenInvalidException){
                return response()->json(['status' => 'Token Is Invalid']);
            }else if ($e instanceof\Tymon\JWTAuth\Exceptions\TokenExpiredException){
                return response()->json(['status' => 'Token Is Expired']);
            }else{
                return response()->json(['status' => 'Authorization Token Not Found']);
            }
        }
        return $next($request);
    }
}
