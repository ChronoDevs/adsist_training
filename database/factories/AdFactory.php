<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $adsetIds = DB::table('adsets')->pluck('id');
        return [
            'adset_id' => $this->faker->randomElement($adsetIds),
            'total_views' => $this->faker->randomNumber(7),
            'total_clicks' => $this->faker->randomNumber(6),
            'total_acquisition' => $this->faker->randomNumber(5)
        ];
    }
}
