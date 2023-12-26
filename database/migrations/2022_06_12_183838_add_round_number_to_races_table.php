<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('races', function (Blueprint $table) {
            $table->integer('round_number')->nullable()->after('track_id');
        });
    }

    public function down()
    {
        Schema::table('races', function (Blueprint $table) {
            $table->dropColumn('round_number');
        });
    }
};
