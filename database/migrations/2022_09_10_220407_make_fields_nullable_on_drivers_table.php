<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drivers', function (Blueprint $table) {
            $table->string('birthday')->nullable()->change();
            $table->string('country')->nullable()->change();
            $table->integer('position_last_season')->nullable()->change();
            $table->integer('championship_points')->nullable()->change();
            $table->integer('GPs_entered')->nullable()->change();
            $table->integer('podiums')->nullable()->change();
            $table->integer('all_time_wins')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
};
