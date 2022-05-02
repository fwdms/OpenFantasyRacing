<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FranchiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('franchises')->insert([
            'id' => 1,
            'name' => 'F1',
            'governing_body' => 'FIA',
            'slug' => 'f1'
        ]);
    }
}
