<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('constructors', function (Blueprint $table) {
            $table->string('slug')->after('name')->nullable();
        });
    }

    public function down()
    {
        Schema::table('constructors', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};
