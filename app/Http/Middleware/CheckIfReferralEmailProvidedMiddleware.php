<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckIfReferralEmailProvidedMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if referral email is not in the user, redirect to th dashboard with a message :
        if ($request->user()->paypal_email == null) {
            return redirect()->route('dashboard')
                ->with('error', 'Please provide your referral email to get started.');
        }
        return $next($request);
    }
}
