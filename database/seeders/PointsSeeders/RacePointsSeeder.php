<?php

namespace Database\Seeders\PointsSeeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RacePointsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('points')->insert([
            'type' => 'race',
            'title' => 'Classified',
            'points_amount' => '1',
            'description' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('points')->insert([
            'type' => 'race',
            'title' => 'Per position gained (max. +10 pts)',
            'points_amount' => '2',
            'description' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('points')->insert([
            'type' => 'race',
            'title' => 'Beat team mate (driver only)',
            'points_amount' => '3',
            'description' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('points')->insert([
            'type' => 'race',
            'title' => 'Fastest lap',
            'points_amount' => '5',
            'description' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('points')->insert([
            'type' => 'race',
            'title' => 'Per position lost (max. -10 pts)',
            'points_amount' => '-2',
            'description' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('points')->insert([
            'type' => 'race',
            'title' => 'Not classified',
            'points_amount' => '-10',
            'description' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('points')->insert([
            'type' => 'race',
            'title' => 'Disqualification from race',
            'points_amount' => '-20',
            'description' => '',
            'created_at' => Carbon::now()
        ]);
    }
}
