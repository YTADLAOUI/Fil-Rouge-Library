<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    public function handle($request, Closure $next)
    {
        // Check if user is authenticated
        if (Auth::check()) {
            // Get the authenticated user
            $user = Auth::user();

            // Check the role value in the User model
            if ($user->role == 1) {
                // User is an admin, allow access
                return $next($request);
            } else {
                // User is not an admin, redirect or show error
                return redirect()->route('unauthorized'); // You can customize this to your needs
            }
        }

        // User is not authenticated, redirect to login page
        return redirect()->route('login');
    }
}

