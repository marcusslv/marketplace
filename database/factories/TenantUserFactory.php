<?php

namespace Database\Factories;

use App\Marketplace\Enums\TenantUserRoleEnum;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TenantUser>
 */
class TenantUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tenant_id' => Tenant::first()?->id ?? Tenant::factory(),
            'user_id' => User::factory(),
            'role' => $this->faker->randomElement(TenantUserRoleEnum::cases()),
        ];
    }
}
