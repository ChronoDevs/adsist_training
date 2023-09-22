<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\Adset;
use Database\Factories\AdFactory;
use Illuminate\Database\Seeder;

class AdsetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Adset::truncate();
        Ad::truncate();
        Adset::factory()
            ->count(14)
            ->has(Ad::factory()->count(1), 'ad')
            ->create();
    }
}
