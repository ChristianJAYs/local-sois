<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AssetTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTime = Carbon::now();
        $data = [
            [
                'type' => 'Logo',
                'asset_type_description' => '1',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'type' => 'Event News',
                'asset_type_description' => '1',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
        ];
        DB::table('article_types')->insert($data);
    }
}
