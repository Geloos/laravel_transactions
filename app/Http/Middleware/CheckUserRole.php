<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,string $role): Response
    {

        $user = ['id' => 123, 'name' => 'admin' , 'role' => 'admin'];

        if($user['role'] === $role){
            echo('edw');
            return $next($request);
        }

        abort(code:404);
    }
}
