<?php

namespace App\Marketplace\Traits;

use App\Models\Scopes\TenantScope;
use Illuminate\Database\Eloquent\Builder;

trait HasTenant
{
    protected static function booted(): void
    {
        static::addGlobalScope('tenant', function (Builder $builder) {
            $builder->where('tenant_id', TenantScope::getTenant());
        });
    }
}
