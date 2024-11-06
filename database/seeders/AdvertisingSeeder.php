<?php

namespace Database\Seeders;

use App\Models\Advertising;
use Illuminate\Database\Seeder;

class AdvertisingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Advertising::factory()
            ->count(10)
            ->create();
    }
}
