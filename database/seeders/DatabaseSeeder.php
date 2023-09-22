<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\SocialPlatformSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		$this->call([
            UserSeeder::class,
            SocialPlatformSeeder::class,
            CampaignSeeder::class,
            AdsetSeeder::class,
        ]);

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
