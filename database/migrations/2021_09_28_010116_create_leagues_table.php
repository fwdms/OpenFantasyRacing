<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaguesTable extends Migration
{
    public function up()
    {
        Schema::create('leagues', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('franchise_id');
            $table->unsignedBigInteger('league_owner_id');
            $table->timestamps();

            // Keys
            $table->foreign('franchise_id')->references('id')->on('franchises');
            $table->foreign('league_owner_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('leagues');
    }
}
