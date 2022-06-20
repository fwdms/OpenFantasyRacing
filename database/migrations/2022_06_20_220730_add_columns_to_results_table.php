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
        Schema::table('results', function (Blueprint $table) {
            $table->tinyInteger('not_classified')
                ->after('laps_completed')
                ->default(0);
            $table->tinyInteger('fastest_lap')
                ->default(0)
                ->after('not_classified');
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
            $table->dropColumn('not_classified');
            $table->dropColumn('fastest_lap');
        });
    }
};
