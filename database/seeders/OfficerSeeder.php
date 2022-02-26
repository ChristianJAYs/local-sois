<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class OfficerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Models\Officer');
        
        for($i = 1 ; $i <= 10 ; $i++){
            DB::table('officers')->insert([
            'title' => $faker->sentence(),
            'description' => $faker->sentence(),
            'body' => $faker->paragraph(),
            'created_at' => \Carbon\Carbon::now(),
            'Updated_at' => \Carbon\Carbon::now(),
        ]);
        }
    }
}
