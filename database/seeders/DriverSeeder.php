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
            'firstName' => 'Lewis',
            'lastName' => 'Hamilton',
            'birthday' => '1985-01-07',
            'number' => 44,
            'constructor_id' => 1,
            'country' => 'United Kingdom',
            'positionLastSeason' => 1,
            'isRookie' => FALSE,
            'newToConstructor' => FALSE,
            'GPsEntered' => 281,
            'allTimeWins' => 100,
            'podiums' => 176,
            'created_at' => Carbon::now()
        ]);

        DB::table('drivers')->insert([
            'firstName' => 'Max',
            'lastName' => 'Verstappen',
            'birthday' => '1997-09-30',
            'number' => 33,
            'constructor_id' => 2,
            'country' => 'Netherlands',
            'positionLastSeason' => 2,
            'isRookie' => FALSE,
            'newToConstructor' => FALSE,
            'GPsEntered' => 134,
            'allTimeWins' => 17,
            'podiums' => 53,
            'created_at' => Carbon::now()
        ]);

        DB::table('drivers')->insert([
            'firstName' => 'Valtteri',
            'lastName' => 'Bottas',
            'birthday' => '1989-08-28',
            'number' => 77,
            'constructor_id' => 1,
            'country' => 'Finland',
            'positionLastSeason' => 3,
            'isRookie' => FALSE,
            'newToConstructor' => FALSE,
            'GPsEntered' => 171,
            'allTimeWins' => 9,
            'podiums' => 64,
            'created_at' => Carbon::now()
        ]);

        DB::table('drivers')->insert([
            'firstName' => 'Lando',
            'lastName' => 'Norris',
            'birthday' => '1999-11-13',
            'number' => 4,
            'constructor_id' => 3,
            'country' => 'United Kingdom',
            'positionLastSeason' => 4,
            'isRookie' => FALSE,
            'newToConstructor' => FALSE,
            'GPsEntered' => 53,
            'allTimeWins' => 0,
            'podiums' => 5,
            'created_at' => Carbon::now()
        ]);

        DB::table('drivers')->insert([
            'firstName' => 'Sergio',
            'lastName' => 'Perez',
            'birthday' => '1990-01-26',
            'number' => 11,
            'constructor_id' => 2,
            'country' => 'Mexico',
            'positionLastSeason' => 5,
            'isRookie' => FALSE,
            'newToConstructor' => FALSE,
            'GPsEntered' => 207,
            'allTimeWins' => 2,
            'podiums' => 12,
            'created_at' => Carbon::now()
        ]);

        DB::table('drivers')->insert([
            'firstName' => 'Carlos',
            'lastName' => 'Sainz',
            'birthday' => '1994-09-01',
            'number' => 55,
            'constructor_id' => 6,
            'country' => 'Spain',
            'positionLastSeason' => 6,
            'isRookie' => FALSE,
            'newToConstructor' => FALSE,
            'GPsEntered' => 134,
            'allTimeWins' => 0,
            'podiums' => 5,
            'created_at' => Carbon::now()
        ]);

        DB::table('drivers')->insert([
            'firstName' => 'Charles',
            'lastName' => 'Leclerc',
            'birthday' => '1997-10-16',
            'number' => 16,
            'constructor_id' => 6,
            'country' => 'Monaco',
            'positionLastSeason' => 7,
            'isRookie' => FALSE,
            'newToConstructor' => FALSE,
            'GPsEntered' => 74,
            'allTimeWins' => 2,
            'podiums' => 13,
            'created_at' => Carbon::now()
        ]);

        DB::table('drivers')->insert([
            'firstName' => 'Daniel',
            'lastName' => 'Ricciardo',
            'birthday' => '1989-07-01',
            'number' => 3,
            'constructor_id' => 3,
            'country' => 'Australia',
            'positionLastSeason' => 8,
            'isRookie' => FALSE,
            'newToConstructor' => FALSE,
            'GPsEntered' => 74,
            'allTimeWins' => 2,
            'podiums' => 13,
            'created_at' => Carbon::now()
        ]);

        DB::table('drivers')->insert([
            'firstName' => 'Pierre',
            'lastName' => 'Gasly',
            'birthday' => '1996-07-02',
            'number' => 10,
            'constructor_id' => 7,
            'country' => 'France',
            'positionLastSeason' => 9,
            'isRookie' => FALSE,
            'newToConstructor' => FALSE,
            'GPsEntered' => 79,
            'allTimeWins' => 1,
            'podiums' => 3,
            'created_at' => Carbon::now()
        ]);

        DB::table('drivers')->insert([
            'firstName' => 'Fernando',
            'lastName' => 'Alonso',
            'birthday' => '1981-07-29',
            'number' => 14,
            'constructor_id' => 5,
            'country' => 'Spain',
            'positionLastSeason' => 10,
            'isRookie' => FALSE,
            'newToConstructor' => FALSE,
            'GPsEntered' => 329,
            'allTimeWins' => 32,
            'podiums' => 97,
            'created_at' => Carbon::now()
        ]);

        DB::table('drivers')->insert([
            'firstName' => 'Esteban',
            'lastName' => 'Ocon',
            'birthday' => '1996-09-17',
            'number' => 31,
            'constructor_id' => 5,
            'country' => 'France',
            'positionLastSeason' => 11,
            'isRookie' => FALSE,
            'newToConstructor' => FALSE,
            'GPsEntered' => 82,
            'allTimeWins' => 1,
            'podiums' => 2,
            'created_at' => Carbon::now()
        ]);

        DB::table('drivers')->insert([
            'firstName' => 'Sebastian',
            'lastName' => 'Vettel',
            'birthday' => '1987-07-03',
            'number' => 5,
            'constructor_id' => 4,
            'country' => 'Germany',
            'positionLastSeason' => 12,
            'isRookie' => FALSE,
            'newToConstructor' => FALSE,
            'GPsEntered' => 273,
            'allTimeWins' => 53,
            'podiums' => 122,
            'created_at' => Carbon::now()
        ]);

        DB::table('drivers')->insert([
            'firstName' => 'Lance',
            'lastName' => 'Stroll',
            'birthday' => '1998-10-29',
            'number' => 18,
            'constructor_id' => 4,
            'country' => 'Canada',
            'positionLastSeason' => 13,
            'isRookie' => FALSE,
            'newToConstructor' => FALSE,
            'GPsEntered' => 93,
            'allTimeWins' => 0,
            'podiums' => 3,
            'created_at' => Carbon::now()
        ]);

        DB::table('drivers')->insert([
            'firstName' => 'Yuki',
            'lastName' => 'Tsunoda',
            'birthday' => '2000-05-11',
            'number' => 22,
            'constructor_id' => 7,
            'country' => 'Japan',
            'positionLastSeason' => 14,
            'isRookie' => TRUE,
            'newToConstructor' => TRUE,
            'GPsEntered' => 15,
            'allTimeWins' => 0,
            'podiums' => 0,
            'created_at' => Carbon::now()
        ]);

        DB::table('drivers')->insert([
            'firstName' => 'George',
            'lastName' => 'Russell',
            'birthday' => '1998-02-15',
            'number' => 63,
            'constructor_id' => 10,
            'country' => 'United Kingdom',
            'positionLastSeason' => 15,
            'isRookie' => FALSE,
            'newToConstructor' => FALSE,
            'GPsEntered' => 53,
            'allTimeWins' => 0,
            'podiums' => 1,
            'created_at' => Carbon::now()
        ]);

        DB::table('drivers')->insert([
            'firstName' => 'Nicholas',
            'lastName' => 'Latifi',
            'birthday' => '1995-06-29',
            'number' => 6,
            'constructor_id' => 10,
            'country' => 'Canada',
            'positionLastSeason' => 16,
            'isRookie' => FALSE,
            'newToConstructor' => FALSE,
            'GPsEntered' => 32,
            'allTimeWins' => 0,
            'podiums' => 0,
            'created_at' => Carbon::now()
        ]);

        DB::table('drivers')->insert([
            'firstName' => 'Kimi',
            'lastName' => 'Räikkönen',
            'birthday' => '1979-10-17',
            'number' => 7,
            'constructor_id' => 8,
            'country' => 'Finland',
            'positionLastSeason' => 17,
            'isRookie' => FALSE,
            'newToConstructor' => FALSE,
            'GPsEntered' => 345,
            'allTimeWins' => 21,
            'podiums' => 103,
            'created_at' => Carbon::now()
        ]);

        DB::table('drivers')->insert([
            'firstName' => 'Antonio',
            'lastName' => 'Giovinazzi',
            'birthday' => '1979-10-17',
            'number' => 99,
            'constructor_id' => 8,
            'country' => 'Italy',
            'positionLastSeason' => 18,
            'isRookie' => FALSE,
            'newToConstructor' => FALSE,
            'GPsEntered' => 55,
            'allTimeWins' => 0,
            'podiums' => 0,
            'created_at' => Carbon::now()
        ]);

        DB::table('drivers')->insert([
            'firstName' => 'Mick',
            'lastName' => 'Schumacher',
            'birthday' => '1999-03-22',
            'number' => 47,
            'constructor_id' => 9,
            'country' => 'Germany',
            'positionLastSeason' => 19,
            'isRookie' => FALSE,
            'newToConstructor' => FALSE,
            'GPsEntered' => 15,
            'allTimeWins' => 0,
            'podiums' => 0,
            'created_at' => Carbon::now()
        ]);

        DB::table('drivers')->insert([
            'firstName' => 'Nikita',
            'lastName' => 'Mazepin',
            'birthday' => '1999-03-02',
            'number' => 9,
            'constructor_id' => 9,
            'country' => 'Russian Automobile Federation',
            'positionLastSeason' => 20,
            'isRookie' => FALSE,
            'newToConstructor' => FALSE,
            'GPsEntered' => 15,
            'allTimeWins' => 0,
            'podiums' => 0,
            'created_at' => Carbon::now()
        ]);
    }
}
