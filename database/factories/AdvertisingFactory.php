<?php

namespace Database\Factories;

use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Advertising>
 */
class AdvertisingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'image_desktop_url' => $this->faker->imageUrl(),
            'image_mobile_url' => $this->faker->imageUrl(),
            'is_active' => $this->faker->boolean,
            'promotion_url' => $this->faker->url,
            'order' => $this->faker->numberBetween(1, 100),
            'tenant_id' => Tenant::first()->id ?? Tenant::factory(),
        ];
    }
}
