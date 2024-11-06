<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
            'external_id' => $this->faker->uuid,
            'description' => $this->faker->text,
            'is_active' => $this->faker->boolean,
            'category_id' => Category::first()->id ?? Category::factory(),
            'review_quantity' => $this->faker->numberBetween(1, 100),
            'rating_average' => $this->faker->randomFloat(2, 1, 5),
            'image_url' => $this->faker->imageUrl(),
            'tenant_id' => Tenant::first()->id ?? Tenant::factory(),
        ];
    }
}
