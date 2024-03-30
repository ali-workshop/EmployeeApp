<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class IsManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
            $CurrentAuthenUser=Auth::user(); # or by auth()->user();

        if($CurrentAuthenUser->role=="manager"){

            return $next($request);
        }
        else {
            return redirect()->route('home')->with('error','But you have no permisson for the maneger Account Yet you are Employee now :)');

        }
        
    }
}
