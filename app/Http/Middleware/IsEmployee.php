<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsEmployee
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $CurrentAuthenUser=Auth::user();  # or by auth()->user();
        if($CurrentAuthenUser->role=="employee"){

            return $next($request);
        }
        else {

            return redirect()->route('home')->with('error','hey manager you have no permisson for the see this info about the Employee it is personal information :( :(');

        }
        
    }
}
