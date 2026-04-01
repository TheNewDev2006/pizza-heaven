<?php

namespace App\Http\Middleware;

use App\Services\PersonalizationService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PersonalizationMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $params = $request->query();
        $personalization = PersonalizationService::getPersonalization($params);

        $request->attributes->set('personalization', $personalization);
        view()->share('personalization', $personalization);

        return $next($request);
    }
}
