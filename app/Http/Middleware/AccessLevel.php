<?php

namespace App\Http\Middleware;

use Closure;

class AccessLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $levels)
    {
        $levels = explode('|', $levels);

        if(checkPermision($levels)){
            return $next($request);
        }

        return redirect(route('home'));
    }
}

function checkPermision($levels){
  $level = accessLevels(auth()->user()->access_level);
  if(in_array($level, $levels)){
    return true;
  }
  return false;
}

function accessLevels($id){
    switch($id){
        case 1:
            return 'admin';
        case 2:
            return 'secretaria';
        case 3:
            return 'chofer';
        case 4:
            return 'cliente';
    }
}