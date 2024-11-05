<?php

namespace App\Marketplace\Tenant\Aggregates\TenantUser\Entities;

use App\Models\TenantUser;

class TenantUserEntity extends TenantUser
{
    protected $table = 'tenant_users';

    protected $fillable = [
        'tenant_id',
        'user_id',
        'role',
    ];
}
