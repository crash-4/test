<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class RegMiddleWare
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
        if (Session::has('users'))
        {
            return $next($request);
        }
        return redirect('registration');//->redirect('/registration');
    }
}
