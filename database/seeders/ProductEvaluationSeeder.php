<?php

namespace Database\Seeders;

use App\Models\ProductEvaluation;
use Illuminate\Database\Seeder;

class ProductEvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductEvaluation::factory(10)->create();
    }
}
