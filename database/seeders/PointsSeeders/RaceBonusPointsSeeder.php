<?php

namespace Database\Seeders\PointsSeeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RaceBonusPointsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('points')->insert([
            'type' => 'race-bonus',
            'title' => '1st place',
            'points_amount' => '25',
            'description' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('points')->insert([
            'type' => 'race-bonus',
            'title' => '2nd place',
            'points_amount' => '18',
            'description' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('points')->insert([
            'type' => 'race-bonus',
            'title' => '3rd place',
            'points_amount' => '15',
            'description' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('points')->insert([
            'type' => 'race-bonus',
            'title' => '4th place',
            'points_amount' => '12',
            'description' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('points')->insert([
            'type' => 'race-bonus',
            'title' => '5th place',
            'points_amount' => '10',
            'description' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('points')->insert([
            'type' => 'race-bonus',
            'title' => '6th place',
            'points_amount' => '8',
            'description' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('points')->insert([
            'type' => 'race-bonus',
            'title' => '7th place',
            'points_amount' => '6',
            'description' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('points')->insert([
            'type' => 'race-bonus',
            'title' => '8th place',
            'points_amount' => '4',
            'description' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('points')->insert([
            'type' => 'race-bonus',
            'title' => '9th place',
            'points_amount' => '2',
            'description' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('points')->insert([
            'type' => 'race-bonus',
            'title' => '10th place',
            'points_amount' => '1',
            'description' => '',
            'created_at' => Carbon::now()
        ]);
    }
}
