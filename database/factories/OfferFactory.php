<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => Product::first()?->id ?? Product::factory(),
            'external_id' => $this->faker->uuid,
            'name' => $this->faker->name,
            'price' => $this->faker->randomFloat(2, 1, 100),
            'quantity' => $this->faker->numberBetween(1, 100),
            'image_url' => $this->faker->imageUrl(),
            'max_installment' => $this->faker->numberBetween(1, 12),
            'max_installment_without_fee' => $this->faker->numberBetween(1, 12),
            'tenant_id' => Tenant::first()->id ?? Tenant::factory(),
            'last_updated_at' => $this->faker->dateTimeThisYear(),

        ];
    }
}
