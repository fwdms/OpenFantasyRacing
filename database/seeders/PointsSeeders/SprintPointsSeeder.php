<?php

namespace Database\Seeders\PointsSeeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SprintPointsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('points')->insert([
            'type' => 'sprint',
            'title' => 'Classified',
            'points_amount' => '1',
            'description' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('points')->insert([
            'type' => 'sprint',
            'title' => 'Per position gained (max. +5 pts)',
            'points_amount' => '1',
            'description' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('points')->insert([
            'type' => 'sprint',
            'title' => 'Beat team mate',
            'points_amount' => '2',
            'description' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('points')->insert([
            'type' => 'sprint',
            'title' => 'Fastest Lap',
            'points_amount' => '3',
            'description' => 'Driver got the fastest lap in a Sprint.',
            'created_at' => Carbon::now()
        ]);

        DB::table('points')->insert([
            'type' => 'sprint',
            'title' => 'Per position lost (max. -5 pts)',
            'points_amount' => '-1',
            'description' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('points')->insert([
            'type' => 'sprint',
            'title' => 'Not classified',
            'points_amount' => '-5',
            'description' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('points')->insert([
            'type' => 'sprint',
            'title' => 'Disqualification from Sprint',
            'points_amount' => '-10',
            'description' => '',
            'created_at' => Carbon::now()
        ]);
    }
}
