<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('results', function (Blueprint $table) {
            $table->integer('laps_completed')->nullable()->after('DNF');
            $table->integer('starting_pos')->after('driver_id');
            $table->integer('finish_pos')->after('starting_pos');
            $table->dropColumn('position');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('results', function (Blueprint $table) {
            $table->dropColumn('laps_completed');
            $table->dropColumn('starting_pos');
            $table->dropColumn('finish_pos');
            $table->integer('postion');
        });
    }
};
