<?php

namespace App\Middleware;

use Closure;
use App\Core\Middleware;
use App\Packages\Auth;

class UserMiddleware extends Middleware
{
    public function handle(Closure $next)
    {
        $user = Auth::user();
        $role = $user->role_id;

        if($role >2) {
            return $next();
        }
        else {
            return $this->response(401, ['message' => 'Only User can access this route']);
        }
    }
}