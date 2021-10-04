<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('league_id');
            $table->integer('maxNumberOfDriversPerTeam')->default(5);
            $table->boolean('canChooseFromSameTeam');
            $table->boolean('canChooseFromSameTopTeam');
            $table->boolean('pointsOnlyAccruedIfDriverInSeat');
            $table->timestamps();

            // Keys
            $table->foreign('league_id')->references('id')->on('leagues');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rules');
    }
}
