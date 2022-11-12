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
        Schema::table('races', function (Blueprint $table) {
            $table->renameColumn('qualifying_type', 'race_type');
        });

        Schema::table('races', function (Blueprint $table) {
            $table->dropColumn('weather');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('races', function (Blueprint $table) {
            $table->renameColumn('race_type', 'qualifying_type');
            $table->string('weather')->nullable();
        });
    }
};
