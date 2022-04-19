<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFantasyTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fantasy_teams', function (Blueprint $table) {
            $table->id();
            $table->string('team_name');
            $table->integer('points')->default(0);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('league_id');
            $table->unsignedBigInteger('constructor_id')->nullable();
            $table->string('logo')->nullable();
            $table->timestamps();

            // Keys
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('league_id')->references('id')->on('leagues');
            $table->foreign('constructor_id')->references('id')->on('constructors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fantasy_teams');
    }
}
