<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class TenantScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply(Builder $builder, Model $model): void
    {
        $builder->where('tenant_id', TenantScope::getTenant());
    }

    public static function setTenant(int $tenantId): void
    {
        session()->put('tenant_id', $tenantId);
    }

    public static function getTenant(): ?int
    {
        return session()->get('tenant_id', 1);
    }
}
