<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFantasyTeamDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fantasy_team_drivers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fantasy_team_id');
            $table->unsignedBigInteger('driver_id');
            $table->boolean('driver_in_seat')->default(FALSE);
            $table->integer('round_drafted')->nullable();
            $table->timestamps();

            // keys
            $table->foreign('fantasy_team_id')->references('id')->on('fantasy_teams');
            $table->foreign('driver_id')->references('id')->on('drivers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fantasy_team_drivers');
    }
}
