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
            $table->integer('postitionLastSeason')->nullable();
            $table->string('engineType');
            $table->integer('constructorsPoints')->default(0);
            $table->integer('numberOfTimesPicked')->default(0);
            $table->unsignedBigInteger('franchiseId');
            $table->string('logo')->nullable();
            $table->timestamps();

            // keys
            $table->foreign('franchiseId')->references('id')->on('franchises');
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
