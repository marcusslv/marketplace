<?php

namespace App\Models;

use App\Marketplace\Traits\HasTenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenantUser extends Model
{
    /** @use HasFactory<\Database\Factories\TenantUserFactory> */
    use HasFactory, HasTenant;
}
