<?php

namespace Database\Seeders;

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
            'franchiseId' => 1,
            'constructorsPoints' => 0,
            'numberOfTimesPicked' => 0
        ]);
    }
}
