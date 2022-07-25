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
            'name' => 'Mercedes',
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
            'name' => 'Red Bull Racing Honda',
            'short_name' => 'Red Bull',
            'slug' => 'red-bull',
            'engine_type' => 'Honda',
            'position_last_season' => 2,
            'franchise_id' => 1,
            'constructors_points' => 0,
            'number_of_times_picked' => 0,
            'created_at' => Carbon::now(),
        ]);

        DB::table('constructors')->insert([
            'name' => 'McLaren Mercedes',
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
            'name' => 'Aston Martin Mercedes',
            'short_name' => 'Aston Martin',
            'slug' => 'aston-martin',
            'engine_type' => 'Mercedes',
            'position_last_season' => 4,
            'franchise_id' => 1,
            'constructors_points' => 0,
            'number_of_times_picked' => 0,
            'created_at' => Carbon::now(),
        ]);

        DB::table('constructors')->insert([
            'name' => 'Alpine Renault',
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
            'name' => 'Ferrari',
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
            'name' => 'AlphaTauri Honda',
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
            'name' => 'Alfa Romeo Racing Ferrari',
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
            'name' => 'Haas Ferrari',
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
            'name' => 'Williams Mercedes',
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
