<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        
       if (Auth::guard($guard)->check()) {
         foreach (Auth::user()->role as $role) {
           if ($role->name == 'pimpinan') {
                return redirect('pimpinan');
           }elseif ($role->name == 'admin') {
                return redirect('admin');
           }elseif ($role->name == 'back') {
                return redirect('back');
           }elseif ($role->name == 'front') {
                return redirect('front');
           }elseif ($role->name == 'pelayanan') {
                return redirect('kasi_pelayanan');
           }
       }
       }
        return $next($request);
    }
}
