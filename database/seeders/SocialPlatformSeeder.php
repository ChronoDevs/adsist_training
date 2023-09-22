<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SocialPlatform;

class SocialPlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Facebook'],
            ['name' => 'Instagram'],
            ['name' => 'Twitter'],
            ['name' => 'Tiktok'],
        ];
        SocialPlatform::truncate();
        SocialPlatform::insert($data);
    }
}
