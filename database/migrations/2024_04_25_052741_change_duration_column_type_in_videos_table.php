<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeDurationColumnTypeInVideosTable extends Migration
{
    /**
     * Run the migrations.
     */

    public function up()
    {
        Schema::table('videos', function (Blueprint $table) {
            $table->string('duration')->change();
        });
    }

    public function down()
    {
        Schema::table('videos', function (Blueprint $table) {
            $table->time('duration')->change();
        });
    }
}
