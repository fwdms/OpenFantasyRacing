<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('constructors', function (Blueprint $table) {
            $table->dropForeign(['franchise_id']);
        });

        Schema::table('drivers', function (Blueprint $table) {
            $table->dropForeign(['constructor_id']);
        });

        Schema::table('fantasy_teams', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['league_id']);
            $table->dropForeign(['constructor_id']);
        });

        Schema::table('fantasy_team_drivers', function (Blueprint $table) {
            $table->dropForeign(['fantasy_team_id']);
            $table->dropForeign(['driver_id']);
        });

        Schema::table('leagues', function (Blueprint $table) {
            $table->dropForeign(['franchise_id']);
            $table->dropForeign(['league_owner_id']);
        });

        Schema::table('races', function (Blueprint $table) {
            $table->dropForeign(['franchise_id']);
        });

        Schema::table('results', function (Blueprint $table) {
            $table->dropForeign(['race_id']);
            $table->dropForeign(['driver_id']);
        });

        Schema::table('rules', function (Blueprint $table) {
            $table->dropForeign(['league_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
