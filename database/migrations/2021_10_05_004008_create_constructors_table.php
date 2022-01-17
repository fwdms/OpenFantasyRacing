<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstructorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constructors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('position_last_season')->nullable();
            $table->string('engine_type');
            $table->integer('constructors_points')->default(0);
            $table->integer('number_of_times_picked')->default(0);
            $table->unsignedBigInteger('franchise_id');
            $table->string('logo')->nullable();
            $table->timestamps();

            // keys
            $table->foreign('franchise_id')->references('id')->on('franchises');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('constructors');
    }
}
