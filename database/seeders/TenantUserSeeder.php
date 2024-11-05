<?php

namespace Database\Seeders;

use App\Marketplace\Enums\TenantUserRoleEnum;
use App\Marketplace\Tenant\Entities\TenantEntity;
use App\Models\TenantUser;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenantUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TenantUser::factory()->make([
            'tenant_id' => TenantEntity::first()->id,
            'user_id' => User::factory(),
            'role' => TenantUserRoleEnum::OWNER,
        ])->save();
    }
}
