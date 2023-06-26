<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gamers = [
            ['name' => 'Minh', 'top' => 1, 'game_id' => 1],
            ['name' => 'Tuấn', 'top' => 1, 'game_id' => 1],
            ['name' => 'Sơn', 'top' => 1, 'game_id' => 1],
            ['name' => 'Tiến', 'top' => 1, 'game_id' => 1],
            ['name' => 'Thanh', 'top' => 2, 'game_id' => 1],
            ['name' => 'Hải', 'top' => 2, 'game_id' => 1],
            ['name' => 'Chức', 'top' => 2, 'game_id' => 1],
            ['name' => 'Phúc', 'top' => 3, 'game_id' => 1],
            ['name' => 'Đức', 'top' => 3, 'game_id' => 1],
            ['name' => 'Tùng', 'top' => 3, 'game_id' => 1],
        ];

        DB::table('gamers')->insert($gamers);
    }
}
