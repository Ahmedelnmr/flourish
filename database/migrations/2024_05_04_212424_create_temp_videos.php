<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('temp_videos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('courseId');
            $table->unsignedBigInteger('userId');

            $table->foreign('courseId')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temp_videos');
    }
};
