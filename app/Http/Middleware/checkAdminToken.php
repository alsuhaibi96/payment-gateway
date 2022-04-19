<?php

namespace App\Http\Middleware;

use App\Http\Traits\general_trait;
use Closure;
use Exception;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\JWTAuth as JWTAuthJWTAuth;

class checkAdminToken
{
    use general_trait;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user=null;
        try {
            $user = JWTAuth::parseToken()->authenticate();
        } catch (Exception $e) {
               if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                   return $this->returnSuccess('Token is Invalid');
                }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                    return $this->returnError('401','Token is Expired');
                }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenBlacklistedException){
                    return $this->returnError('400','Token is Blacklisted');
                }else{
                    return $this->returnError('404','Authorization Token not found');
                }
        }
        catch(\Throwable $e){
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                return $this->returnSuccess('Token is Invalid');
             }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                 return $this->returnError('401','Token is Expired');
             }else{
                return $this->returnError('404','Authorization Token not found');
            }

        }
        if(!$user){
            return $this->returnError('','Unauthenticated');
        }
         
        return $next($request);
     
        
    }
}
