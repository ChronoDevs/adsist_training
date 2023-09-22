<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class CampaignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $userIds = DB::table('users')->pluck('id');
        $socialPlatIds = DB::table('social_platforms')->pluck('id');
        return [
            'user_id' => $this->faker->randomElement($userIds),
            'social_platform_id' => $this->faker->randomElement($socialPlatIds),
            'name' => $this->faker->name,
            'budget' => $this->faker->randomNumber(6, true),
            'daily_budget' => $this->faker->randomNumber(4, true),
        ];
    }
}
