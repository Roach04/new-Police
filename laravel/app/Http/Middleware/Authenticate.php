<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Authenticate
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
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
        if ($this->auth->guest()) {

            if ($request->ajax()) {

                return response('Unauthorized.', 401);

            } else {

                return redirect()->guest('account/signIn')
                ->with('global', '<p style="font:16px arial; width:470px; margin-top:90px; text-align:center" class="alert alert-danger alert-dismissible pull-right" role="alert">' . 'Access Denied You must be logged in.' . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . '</p>');
            }
        }

        return $next($request);
    }
}
