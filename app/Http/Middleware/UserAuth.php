<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UserAuth
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
        if (!auth()->check()) { // Check if the user is not authenticated
            $routeName = $request->route() ? $request->route()->getName() : null; // Get the current route name
            if ($routeName && $routeName !== 'home') { // Check if the route exists and is not 'home'
                return redirect()->route('home'); // Redirect to the 'home' route
            }
        } 
    
        return $next($request); // Proceed with the request
    }
    
}
