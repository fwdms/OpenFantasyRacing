<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacesTable extends Migration
{
    public function up()
    {
        Schema::create('races', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('franchise_id');
            $table->unsignedBigInteger('track_id');
            $table->date('date');
            $table->string('qualifying_type')->default('standard');
            $table->string('weather')->nullable();
            $table->timestamps();

            // keys
            $table->foreign('franchise_id')->references('id')->on('franchises');
        });
    }

    public function down()
    {
        Schema::dropIfExists('races');
    }
}
