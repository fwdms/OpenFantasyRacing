<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->date('birthday');
            $table->integer('weight');
            $table->integer('height');
            $table->integer('number');
            $table->unsignedBigInteger('constructor_id');
            $table->string('nationality');
            $table->integer('positionLastSeason')->nullable();
            $table->integer('championshipPoints')->default(0);
            $table->boolean('isRookie')->default(FALSE);
            $table->boolean('newToConstructor')->default(FALSE);
            $table->integer('allTimeWins')->default(0);
            $table->string('status')->nullable();
            $table->bigInteger('numberOfTimesPicked')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
