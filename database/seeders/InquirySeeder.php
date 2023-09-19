<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class InquirySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inquiries')->insert([
            'content' => Str::random(50),
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'contact_number' => rand(1000000, 9999999),
        ]);
    }
}
