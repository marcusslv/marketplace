<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductTotals>
 */
class ProductTotalsFactory extends Factory
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
            'available' => $this->faker->numberBetween(1, 100),
            'quantity_sales' => $this->faker->numberBetween(1, 100),
            'chargebacks' => $this->faker->numberBetween(1, 100),
            'devolution' => $this->faker->numberBetween(1, 100),
            'cancellations' => $this->faker->numberBetween(1, 100),
            'total_abandonment' => $this->faker->numberBetween(1, 100),
            'last_updated_at' => $this->faker->dateTimeThisYear(),
            'tenant_id' => Tenant::first()->id ?? Tenant::factory(),
        ];
    }
}
