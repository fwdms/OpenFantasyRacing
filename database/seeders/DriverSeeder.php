<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivers')->insert([
            'first_name' => 'Lewis',
            'last_name' => 'Hamilton',
            'birthday' => '1985-01-07',
            'number' => 44,
            'constructor_id' => 1,
            'country' => 'United Kingdom',
            'position_last_season' => 1,
            'is_rookie' => false,
            'new_to_constructor' => false,
            'GPs_entered' => 281,
            'all_time_wins' => 100,
            'podiums' => 176,
            'created_at' => Carbon::now(),
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Max',
            'last_name' => 'Verstappen',
            'birthday' => '1997-09-30',
            'number' => 33,
            'constructor_id' => 2,
            'country' => 'Netherlands',
            'position_last_season' => 2,
            'is_rookie' => false,
            'new_to_constructor' => false,
            'GPs_entered' => 134,
            'all_time_Wins' => 17,
            'podiums' => 53,
            'created_at' => Carbon::now(),
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Valtteri',
            'last_name' => 'Bottas',
            'birthday' => '1989-08-28',
            'number' => 77,
            'constructor_id' => 1,
            'country' => 'Finland',
            'position_last_season' => 3,
            'is_rookie' => false,
            'new_to_constructor' => false,
            'GPs_entered' => 171,
            'all_time_Wins' => 9,
            'podiums' => 64,
            'created_at' => Carbon::now(),
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Lando',
            'last_name' => 'Norris',
            'birthday' => '1999-11-13',
            'number' => 4,
            'constructor_id' => 3,
            'country' => 'United Kingdom',
            'position_last_season' => 4,
            'is_rookie' => false,
            'new_to_constructor' => false,
            'GPs_entered' => 53,
            'all_time_Wins' => 0,
            'podiums' => 5,
            'created_at' => Carbon::now(),
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Sergio',
            'last_name' => 'Perez',
            'birthday' => '1990-01-26',
            'number' => 11,
            'constructor_id' => 2,
            'country' => 'Mexico',
            'position_last_season' => 5,
            'is_rookie' => false,
            'new_to_constructor' => false,
            'GPs_entered' => 207,
            'all_time_Wins' => 2,
            'podiums' => 12,
            'created_at' => Carbon::now(),
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Carlos',
            'last_name' => 'Sainz',
            'birthday' => '1994-09-01',
            'number' => 55,
            'constructor_id' => 6,
            'country' => 'Spain',
            'position_last_season' => 6,
            'is_rookie' => false,
            'new_to_constructor' => false,
            'GPs_entered' => 134,
            'all_time_Wins' => 0,
            'podiums' => 5,
            'created_at' => Carbon::now(),
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Charles',
            'last_name' => 'Leclerc',
            'birthday' => '1997-10-16',
            'number' => 16,
            'constructor_id' => 6,
            'country' => 'Monaco',
            'position_last_season' => 7,
            'is_rookie' => false,
            'new_to_constructor' => false,
            'GPs_entered' => 74,
            'all_time_Wins' => 2,
            'podiums' => 13,
            'created_at' => Carbon::now(),
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Daniel',
            'last_name' => 'Ricciardo',
            'birthday' => '1989-07-01',
            'number' => 3,
            'constructor_id' => 3,
            'country' => 'Australia',
            'position_last_season' => 8,
            'is_rookie' => false,
            'new_to_constructor' => false,
            'GPs_entered' => 74,
            'all_time_Wins' => 2,
            'podiums' => 13,
            'created_at' => Carbon::now(),
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Pierre',
            'last_name' => 'Gasly',
            'birthday' => '1996-07-02',
            'number' => 10,
            'constructor_id' => 7,
            'country' => 'France',
            'position_last_season' => 9,
            'is_rookie' => false,
            'new_to_constructor' => false,
            'GPs_entered' => 79,
            'all_time_Wins' => 1,
            'podiums' => 3,
            'created_at' => Carbon::now(),
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Fernando',
            'last_name' => 'Alonso',
            'birthday' => '1981-07-29',
            'number' => 14,
            'constructor_id' => 5,
            'country' => 'Spain',
            'position_last_season' => 10,
            'is_rookie' => false,
            'new_to_constructor' => false,
            'GPs_entered' => 329,
            'all_time_Wins' => 32,
            'podiums' => 97,
            'created_at' => Carbon::now(),
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Esteban',
            'last_name' => 'Ocon',
            'birthday' => '1996-09-17',
            'number' => 31,
            'constructor_id' => 5,
            'country' => 'France',
            'position_last_season' => 11,
            'is_rookie' => false,
            'new_to_constructor' => false,
            'GPs_entered' => 82,
            'all_time_Wins' => 1,
            'podiums' => 2,
            'created_at' => Carbon::now(),
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Sebastian',
            'last_name' => 'Vettel',
            'birthday' => '1987-07-03',
            'number' => 5,
            'constructor_id' => 4,
            'country' => 'Germany',
            'position_last_season' => 12,
            'is_rookie' => false,
            'new_to_constructor' => false,
            'GPs_entered' => 273,
            'all_time_Wins' => 53,
            'podiums' => 122,
            'created_at' => Carbon::now(),
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Lance',
            'last_name' => 'Stroll',
            'birthday' => '1998-10-29',
            'number' => 18,
            'constructor_id' => 4,
            'country' => 'Canada',
            'position_last_season' => 13,
            'is_rookie' => false,
            'new_to_constructor' => false,
            'GPs_entered' => 93,
            'all_time_Wins' => 0,
            'podiums' => 3,
            'created_at' => Carbon::now(),
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Yuki',
            'last_name' => 'Tsunoda',
            'birthday' => '2000-05-11',
            'number' => 22,
            'constructor_id' => 7,
            'country' => 'Japan',
            'position_last_season' => 14,
            'is_rookie' => true,
            'new_to_constructor' => true,
            'GPs_entered' => 15,
            'all_time_Wins' => 0,
            'podiums' => 0,
            'created_at' => Carbon::now(),
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'George',
            'last_name' => 'Russell',
            'birthday' => '1998-02-15',
            'number' => 63,
            'constructor_id' => 10,
            'country' => 'United Kingdom',
            'position_last_season' => 15,
            'is_rookie' => false,
            'new_to_constructor' => false,
            'GPs_entered' => 53,
            'all_time_Wins' => 0,
            'podiums' => 1,
            'created_at' => Carbon::now(),
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Nicholas',
            'last_name' => 'Latifi',
            'birthday' => '1995-06-29',
            'number' => 6,
            'constructor_id' => 10,
            'country' => 'Canada',
            'position_last_season' => 16,
            'is_rookie' => false,
            'new_to_constructor' => false,
            'GPs_entered' => 32,
            'all_time_Wins' => 0,
            'podiums' => 0,
            'created_at' => Carbon::now(),
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Kimi',
            'last_name' => 'Räikkönen',
            'birthday' => '1979-10-17',
            'number' => 7,
            'constructor_id' => 8,
            'country' => 'Finland',
            'position_last_season' => 17,
            'is_rookie' => false,
            'new_to_constructor' => false,
            'GPs_entered' => 345,
            'all_time_Wins' => 21,
            'podiums' => 103,
            'created_at' => Carbon::now(),
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Antonio',
            'last_name' => 'Giovinazzi',
            'birthday' => '1979-10-17',
            'number' => 99,
            'constructor_id' => 8,
            'country' => 'Italy',
            'position_last_season' => 18,
            'is_rookie' => false,
            'new_to_constructor' => false,
            'GPs_entered' => 55,
            'all_time_Wins' => 0,
            'podiums' => 0,
            'created_at' => Carbon::now(),
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Mick',
            'last_name' => 'Schumacher',
            'birthday' => '1999-03-22',
            'number' => 47,
            'constructor_id' => 9,
            'country' => 'Germany',
            'position_last_season' => 19,
            'is_rookie' => false,
            'new_to_constructor' => false,
            'GPs_entered' => 15,
            'all_time_Wins' => 0,
            'podiums' => 0,
            'created_at' => Carbon::now(),
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Nikita',
            'last_name' => 'Mazepin',
            'birthday' => '1999-03-02',
            'number' => 9,
            'constructor_id' => 9,
            'country' => 'Russian Automobile Federation',
            'position_last_season' => 20,
            'is_rookie' => false,
            'new_to_constructor' => false,
            'GPs_entered' => 15,
            'all_time_Wins' => 0,
            'podiums' => 0,
            'created_at' => Carbon::now(),
        ]);
    }
}
