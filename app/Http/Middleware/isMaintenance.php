<?php

namespace App\Http\Middleware;

use App\Helpers\CommonHelper;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isMaintenance
{

    public function handle(Request $request, Closure $next): Response
    {
        if (CommonHelper::getsetting('is_maintenance') == 'yes') {
            return abort(503);
        }
        return $next($request);
    }
}
