<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssetsTasbleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $assets = [
            ['name' => 'Húc', 'gamer_id' => 1, 'quantity' => 0],
            ['name' => 'Húc', 'gamer_id' => 2, 'quantity' => 0],
            ['name' => 'Húc', 'gamer_id' => 3, 'quantity' => 0],
            ['name' => 'Húc', 'gamer_id' => 4, 'quantity' => 0],
            ['name' => 'Húc', 'gamer_id' => 5, 'quantity' => 0],
            ['name' => 'Húc', 'gamer_id' => 6, 'quantity' => 0],
            ['name' => 'Húc', 'gamer_id' => 7, 'quantity' => 0],
            ['name' => 'Húc', 'gamer_id' => 8, 'quantity' => 0],
            ['name' => 'Húc', 'gamer_id' => 9, 'quantity' => 0],
            ['name' => 'Húc', 'gamer_id' => 10, 'quantity' => 0],
        ];

        DB::table('assets')->insert($assets);
    }
}
