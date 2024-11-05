<?php

namespace App\Http\Middleware;

use App\Models\Scopes\TenantScope;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MultiTenantMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $service = app(\App\Marketplace\Tenant\Services\TenantService::class);
        $tenant = $service->getTenantByDomain($request->getHost());

        if (! $tenant) {
            abort(404, 'Tenant not found');
        }

        TenantScope::setTenant($tenant->id);

        return $next($request);
    }
}
