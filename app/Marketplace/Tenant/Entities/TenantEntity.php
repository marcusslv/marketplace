<?php

namespace App\Marketplace\Tenant\Entities;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TenantEntity extends Tenant
{
    protected $table = 'tenants';

    protected $fillable = [
        'name',
        'domain',
        'is_active',
        'settings',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'is_active' => 'boolean',
        'settings' => 'array',
    ];

    protected $hidden = [
        'deleted_at',
        'updated_at',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }
}
