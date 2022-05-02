<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            FranchiseSeeder::class,
            ConstructorSeeder::class,
            DriverSeeder::class,
            UserSeeder::class,
            PointsSeeders\QualifyingPointsSeeder::class,
            PointsSeeders\QualifyingBonusPointsSeeder::class,
            PointsSeeders\RacePointsSeeder::class,
            PointsSeeders\RaceBonusPointsSeeder::class,
            PointsSeeders\StreakPointsSeeder::class,
            PointsSeeders\SprintPointsSeeder::class,
            PointsSeeders\SprintBonusPointsSeeder::class,
        ]);
    }
}
