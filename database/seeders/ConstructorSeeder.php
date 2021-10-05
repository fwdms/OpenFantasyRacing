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
            'engineType' => 'Mercedes',
            'positionLastSeason' => 1,
            'franchiseId' => 1,
            'constructorsPoints' => 0,
            'numberOfTimesPicked' => 0,
            'created_at' => Carbon::now()
        ]);

        DB::table('constructors')->insert([
            'name' => 'Red Bull Racing Honda',
            'engineType' => 'Honda',
            'positionLastSeason' => 2,
            'franchiseId' => 1,
            'constructorsPoints' => 0,
            'numberOfTimesPicked' => 0,
            'created_at' => Carbon::now()
        ]);

        DB::table('constructors')->insert([
            'name' => 'McLaren Mercedes',
            'engineType' => 'Mercedes',
            'positionLastSeason' => 3,
            'franchiseId' => 1,
            'constructorsPoints' => 0,
            'numberOfTimesPicked' => 0,
            'created_at' => Carbon::now()
        ]);

        DB::table('constructors')->insert([
            'name' => 'Aston Martin Mercedes',
            'engineType' => 'Mercedes',
            'positionLastSeason' => 4,
            'franchiseId' => 1,
            'constructorsPoints' => 0,
            'numberOfTimesPicked' => 0,
            'created_at' => Carbon::now()
        ]);

        DB::table('constructors')->insert([
            'name' => 'Alpine Renault',
            'engineType' => 'Renault',
            'positionLastSeason' => 5,
            'franchiseId' => 1,
            'constructorsPoints' => 0,
            'numberOfTimesPicked' => 0,
            'created_at' => Carbon::now()
        ]);

        DB::table('constructors')->insert([
            'name' => 'Ferrari',
            'engineType' => 'Ferrari',
            'positionLastSeason' => 6,
            'franchiseId' => 1,
            'constructorsPoints' => 0,
            'numberOfTimesPicked' => 0,
            'created_at' => Carbon::now()
        ]);

        DB::table('constructors')->insert([
            'name' => 'AlphaTauri Honda',
            'engineType' => 'Honda',
            'positionLastSeason' => 7,
            'franchiseId' => 1,
            'constructorsPoints' => 0,
            'numberOfTimesPicked' => 0,
            'created_at' => Carbon::now()
        ]);

        DB::table('constructors')->insert([
            'name' => 'Alfa Romeo Racing Ferrari',
            'engineType' => 'Ferrari',
            'positionLastSeason' => 8,
            'franchiseId' => 1,
            'constructorsPoints' => 0,
            'numberOfTimesPicked' => 0,
            'created_at' => Carbon::now()
        ]);

        DB::table('constructors')->insert([
            'name' => 'Haas Ferrari',
            'engineType' => 'Ferrari',
            'positionLastSeason' => 9,
            'franchiseId' => 1,
            'constructorsPoints' => 0,
            'numberOfTimesPicked' => 0,
            'created_at' => Carbon::now()
        ]);

        DB::table('constructors')->insert([
            'name' => 'Williams Mercedes',
            'engineType' => 'Mercedes',
            'positionLastSeason' => 10,
            'franchiseId' => 1,
            'constructorsPoints' => 0,
            'numberOfTimesPicked' => 0,
            'created_at' => Carbon::now()
        ]);
    }
}
