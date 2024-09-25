<?php

namespace App\Http\Middleware;

use App\Helpers\CommonHelper;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;

class isGuest
{

    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('admin')->check()) {
            return Redirect::to(CommonHelper::admin('dashboard'));
        }
        return $next($request);
    }
}
