<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('constructors')->insert([
            'name' => 'Mercedes-AMG Petronas F1 Team',
            'short_name' => 'Mercedes',
            'slug' => 'mercedes',
            'engine_type' => 'Mercedes',
            'position_last_season' => 1,
            'franchise_id' => 1,
            'constructors_points' => 0,
            'number_of_times_picked' => 0,
            'created_at' => Carbon::now(),
        ]);

        DB::table('constructors')->insert([
            'name' => 'Oracle Red Bull Racing',
            'short_name' => 'Red Bull Racing',
            'slug' => 'red_bull',
            'engine_type' => 'Honda',
            'position_last_season' => 2,
            'franchise_id' => 1,
            'constructors_points' => 0,
            'number_of_times_picked' => 0,
            'created_at' => Carbon::now(),
        ]);

        DB::table('constructors')->insert([
            'name' => 'McLaren F1 Team',
            'short_name' => 'McLaren',
            'slug' => 'mclaren',
            'engine_type' => 'Mercedes',
            'position_last_season' => 3,
            'franchise_id' => 1,
            'constructors_points' => 0,
            'number_of_times_picked' => 0,
            'created_at' => Carbon::now(),
        ]);

        DB::table('constructors')->insert([
            'name' => 'Aston Martin Aramco Cognizant F1 Team',
            'short_name' => 'Aston Martin',
            'slug' => 'aston_martin',
            'engine_type' => 'Mercedes',
            'position_last_season' => 4,
            'franchise_id' => 1,
            'constructors_points' => 0,
            'number_of_times_picked' => 0,
            'created_at' => Carbon::now(),
        ]);

        DB::table('constructors')->insert([
            'name' => 'BWT Alpine F1 Team',
            'short_name' => 'Alpine',
            'slug' => 'alpine',
            'engine_type' => 'Renault',
            'position_last_season' => 5,
            'franchise_id' => 1,
            'constructors_points' => 0,
            'number_of_times_picked' => 0,
            'created_at' => Carbon::now(),
        ]);

        DB::table('constructors')->insert([
            'name' => 'Scuderia Ferrari',
            'short_name' => 'Ferrari',
            'slug' => 'ferrari',
            'engine_type' => 'Ferrari',
            'position_last_season' => 6,
            'franchise_id' => 1,
            'constructors_points' => 0,
            'number_of_times_picked' => 0,
            'created_at' => Carbon::now(),
        ]);

        DB::table('constructors')->insert([
            'name' => 'Scuderia AlphaTauri',
            'short_name' => 'AlphaTauri',
            'slug' => 'alphatauri',
            'engine_type' => 'Honda',
            'position_last_season' => 7,
            'franchise_id' => 1,
            'constructors_points' => 0,
            'number_of_times_picked' => 0,
            'created_at' => Carbon::now(),
        ]);

        DB::table('constructors')->insert([
            'name' => 'Alfa Romeo F1 Team ORLEN',
            'short_name' => 'Alfa Romeo',
            'slug' => 'alfa-romeo',
            'engine_type' => 'Ferrari',
            'position_last_season' => 8,
            'franchise_id' => 1,
            'constructors_points' => 0,
            'number_of_times_picked' => 0,
            'created_at' => Carbon::now(),
        ]);

        DB::table('constructors')->insert([
            'name' => 'Haas F1 Team',
            'short_name' => 'Haas',
            'slug' => 'haas',
            'engine_type' => 'Ferrari',
            'position_last_season' => 9,
            'franchise_id' => 1,
            'constructors_points' => 0,
            'number_of_times_picked' => 0,
            'created_at' => Carbon::now(),
        ]);

        DB::table('constructors')->insert([
            'name' => 'Williams Racing',
            'short_name' => 'Williams',
            'slug' => 'williams',
            'engine_type' => 'Mercedes',
            'position_last_season' => 10,
            'franchise_id' => 1,
            'constructors_points' => 0,
            'number_of_times_picked' => 0,
            'created_at' => Carbon::now(),
        ]);
    }
}
