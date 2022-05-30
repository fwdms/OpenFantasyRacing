<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->string('name')->after('id');
            $table->string('track_name')->after('name');
            $table->string('country')->after('track_name');
            $table->string('date_time')->after('country');
            $table->integer('franchise_id')->after('date_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('track_name');
            $table->dropColumn('country');
            $table->dropColumn('date_time');
            $table->dropColumn('franchise_id');
        });
    }
};
