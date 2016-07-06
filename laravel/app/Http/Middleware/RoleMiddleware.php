<?php

namespace App\Http\Middleware;

use App\User;

use App\Role;

use Closure;

class RoleMiddleware
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
        
        $roles = $this->getRole($request);

        $role = Auth::user()->role;

        if ($role == 'data') {
            
            return $next($request);
        }
        
        return $next($request);
    }


}
