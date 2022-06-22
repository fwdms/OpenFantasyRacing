<?php

namespace Database\Seeders\PointsSeeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QualifyingPointsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('points')->insert([
            'type' => 'qualifying',
            'title' => 'Q1 Finish',
            'points_amount' => '1',
            'description' => 'Finish Q1',
            'created_at' => Carbon::now(),
        ]);

        DB::table('points')->insert([
            'type' => 'qualifying',
            'title' => 'Q2 Finish',
            'points_amount' => '2',
            'description' => 'Finish Q2',
            'created_at' => Carbon::now(),
        ]);

        DB::table('points')->insert([
            'type' => 'qualifying',
            'title' => 'Q3 Finish',
            'points_amount' => '3',
            'description' => 'Finish Q3',
            'created_at' => Carbon::now(),
        ]);

        DB::table('points')->insert([
            'type' => 'qualifying',
            'title' => 'Beat team mate',
            'points_amount' => '2',
            'description' => 'Beat team mate in qualifying',
            'created_at' => Carbon::now(),
        ]);

        DB::table('points')->insert([
            'type' => 'qualifying',
            'title' => 'Not classified',
            'points_amount' => '-5',
            'description' => '',
            'created_at' => Carbon::now(),
        ]);

        DB::table('points')->insert([
            'type' => 'qualifying',
            'title' => 'Disqualification from qualifying',
            'points_amount' => '-10',
            'description' => '',
            'created_at' => Carbon::now(),
        ]);
    }
}
