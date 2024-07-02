<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cek_login_ku
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
      if (Auth::check() && Auth::user()->level == 'kasubag umum' && Auth::user()->status != 'Terverifikasi'){
        Auth::logout();
        return redirect('../')->with('error',"ooopsss anda tidak bisa mengakses halaman tersebut");		
      }	
      return $next($request);
    //	return redirect('../')->with('error',"ooopsss anda tidak bisa mengakses halaman tersebut");		
    }
}
