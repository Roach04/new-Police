<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

use App\Role;

use Illuminate\Contracts\Auth\Guard;

class DataMiddleware
{

    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        $role = Auth::user()->username;

        if ($role != 'Pastor Dea') {

            return redirect()->guest('account/signIn')
            ->with('global', '<p style="font:16px arial; width:470px; margin-top:90px; text-align:center" class="alert alert-danger alert-dismissible pull-right" role="alert">' . 'Access Denied You must be logged in.' . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . '</p>');
            
        }
        else {
                
            return redirect('profile/{id}/data')
            -> with('global', '<p style="font:16px arial; width:470px; margin-top:90px; text-align:center" class="alert alert-success alert-dismissible pull-right" role="alert">' . 'Welcome Admin.' . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . '</p>');
        }
        
    }
}
