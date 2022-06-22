<?php

namespace Database\Seeders\PointsSeeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class QualifyingBonusPointsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('points')->insert([
            'type' => 'qualifying-bonus',
            'title' => '1st place',
            'points_amount' => '10',
            'description' => 'Driver took the pole in qualifying.',
            'created_at' => Carbon::now(),
        ]);

        DB::table('points')->insert([
            'type' => 'qualifying-bonus',
            'title' => '2nd place',
            'points_amount' => '9',
            'description' => 'Driver got 2nd place in qualifying.',
            'created_at' => Carbon::now(),
        ]);

        DB::table('points')->insert([
            'type' => 'qualifying-bonus',
            'title' => '3rd place',
            'points_amount' => '8',
            'description' => 'Driver got 3rd place in qualifying.',
            'created_at' => Carbon::now(),
        ]);

        DB::table('points')->insert([
            'type' => 'qualifying-bonus',
            'title' => '4th place',
            'points_amount' => '7',
            'description' => 'Driver got 4th place in qualifying.',
            'created_at' => Carbon::now(),
        ]);

        DB::table('points')->insert([
            'type' => 'qualifying-bonus',
            'title' => '5th place',
            'points_amount' => '6',
            'description' => 'Driver got 5th place in qualifying.',
            'created_at' => Carbon::now(),
        ]);

        DB::table('points')->insert([
            'type' => 'qualifying-bonus',
            'title' => '6th place',
            'points_amount' => '5',
            'description' => 'Driver got 6th place in qualifying.',
            'created_at' => Carbon::now(),
        ]);

        DB::table('points')->insert([
            'type' => 'qualifying-bonus',
            'title' => '7th place',
            'points_amount' => '4',
            'description' => 'Driver got 7th place in qualifying.',
            'created_at' => Carbon::now(),
        ]);

        DB::table('points')->insert([
            'type' => 'qualifying-bonus',
            'title' => '8th place',
            'points_amount' => '3',
            'description' => 'Driver got 8th place in qualifying.',
            'created_at' => Carbon::now(),
        ]);

        DB::table('points')->insert([
            'type' => 'qualifying-bonus',
            'title' => '9th place',
            'points_amount' => '2',
            'description' => 'Driver got 9th place in qualifying.',
            'created_at' => Carbon::now(),
        ]);

        DB::table('points')->insert([
            'type' => 'qualifying-bonus',
            'title' => '10th place',
            'points_amount' => '1',
            'description' => 'Driver got 10th place in qualifying.',
            'created_at' => Carbon::now(),
        ]);
    }
}
