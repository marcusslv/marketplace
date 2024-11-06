<?php

namespace Database\Seeders;

use App\Models\ProductTotals;
use Illuminate\Database\Seeder;

class ProductTotalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductTotals::factory()
            ->count(5)
            ->create();
    }
}
