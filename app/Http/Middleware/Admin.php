<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
      $user = \App\User::where('email', $request->email)->first();
              if ($user->role == 'users') {
                  return redirect('admin/dashboard');
              } elseif ($user->role == 'admin') {
                  return redirect('mahasiswa/dashboard');
              }

        return $next($request);
    }
}
