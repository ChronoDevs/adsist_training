<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class AdsetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $campaignIds = DB::table('campaigns')->pluck('id');
        return [
            'campaign_id' => $this->faker->randomElement($campaignIds),
            'headline' => $this->faker->text(10),
            'description' => $this->faker->sentence(),
            'site_url' => $this->faker->url(),
            'targeting' => $this->faker->word(),
            'category_name' => $this->faker->word(),
            'media_file' => $this->faker->url(),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
        ];
    }
}
