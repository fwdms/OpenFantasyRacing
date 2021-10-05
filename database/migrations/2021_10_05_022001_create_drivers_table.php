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
            $table->integer('number');
            $table->date('birthday');
            $table->unsignedBigInteger('constructor_id');
            $table->string('country');
            $table->integer('positionLastSeason')->nullable();
            $table->integer('championshipPoints')->default(0);
            $table->boolean('isRookie')->default(FALSE);
            $table->boolean('newToConstructor')->default(FALSE);
            $table->integer('GPsEntered')->default(0);
            $table->integer('podiums')->default(0);
            $table->integer('allTimeWins')->default(0);
            $table->bigInteger('numberOfTimesPicked')->default(0);
            $table->string('profile_image')->nullable();
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
