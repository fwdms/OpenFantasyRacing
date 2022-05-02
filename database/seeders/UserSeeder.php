<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'first_name' => 'Karl',
            'last_name' => 'Murray',
            'email' => 'karlm89@me.com',
            'password' => Hash::make('Newo7510')
        ]);
    }
}
