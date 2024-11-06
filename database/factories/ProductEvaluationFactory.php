<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductEvaluation>
 */
class ProductEvaluationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => \App\Models\Product::first()->id ?? \App\Models\Product::factory(),
            'user_id' => \App\Models\User::first()->id ?? \App\Models\User::factory(),
            'rating' => $this->faker->randomFloat(2, 1, 5),
            'comment' => $this->faker->text,
        ];
    }
}
