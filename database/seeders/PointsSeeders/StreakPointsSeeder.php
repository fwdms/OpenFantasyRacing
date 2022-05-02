<?php

namespace Database\Seeders\PointsSeeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StreakPointsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('points')->insert([
            'type' => 'streaks',
            'title' => 'Driver Qualifying',
            'points_amount' => '5',
            'description' => 'Driver qualifies in the Top 10 for 5 qualifying sessions in a row.',
            'created_at' => Carbon::now()
        ]);

        DB::table('points')->insert([
            'type' => 'streaks',
            'title' => 'Driver Race',
            'points_amount' => '10',
            'description' => 'Driver finishes in the Top 10 for 5 races in a row.',
            'created_at' => Carbon::now()
        ]);

        DB::table('points')->insert([
            'type' => 'streaks',
            'title' => 'Constructor Qualifying',
            'points_amount' => '5',
            'description' => 'Both drivers qualify in the Top 10 for 3 qualifying sessions in a row.',
            'created_at' => Carbon::now()
        ]);

        DB::table('points')->insert([
            'type' => 'streaks',
            'title' => 'Constructor Race',
            'points_amount' => '10',
            'description' => 'Both drivers finish in the Top 10 for 3 races in a row.',
            'created_at' => Carbon::now()
        ]);
    }
}
