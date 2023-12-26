<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('results', function (Blueprint $table) {
            $table->tinyInteger('not_classified')
                ->after('laps_completed')
                ->default(0);
            $table->tinyInteger('fastest_lap')
                ->after('not_classified')
                ->default(0);
        });
    }

    public function down()
    {
        Schema::table('results', function (Blueprint $table) {
            $table->dropColumn('not_classified');
            $table->dropColumn('fastest_lap');
        });
    }
};
