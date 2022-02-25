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
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('number');
            $table->date('birthday');
            $table->unsignedBigInteger('constructor_id');
            $table->string('country');
            $table->integer('position_last_season')->nullable();
            $table->integer('championship_points')->default(0);
            $table->boolean('is_rookie')->default(FALSE);
            $table->boolean('new_to_constructor')->default(FALSE);
            $table->integer('GPs_entered')->default(0);
            $table->integer('podiums')->default(0);
            $table->integer('all_time_wins')->default(0);
            $table->bigInteger('number_of_times_picked')->default(0);
            $table->string('profile_image')->nullable();
            $table->timestamps();

            // keys
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
        Schema::dropIfExists('drivers');
    }
}
