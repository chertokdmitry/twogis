<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class BuildingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) {
            DB::table('buildings')->insert([
                'address' => $faker->country . ', '. $faker->address,
                'geo_lat' => $faker->latitude,
                'geo_lon' => $faker->longitude,
            ]);
        }
    }
}
