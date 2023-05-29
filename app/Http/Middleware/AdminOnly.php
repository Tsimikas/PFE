<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminOnly
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
        $user = request()->user();
        $allowedProfils = func_get_args();
        array_shift($allowedProfils);
        // $allowedProfils = is_array($allowedProfils) ? $allowedProfils : [$allowedProfils];
        if (!$user || !in_array($user->profil, $allowedProfils)) {
            return abort(403, 'Unauthorized');  // autorisation que allowedprofils li homa admin w armement
        }
        return $next($request);
    }
}
