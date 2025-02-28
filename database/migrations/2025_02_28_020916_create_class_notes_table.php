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
        Schema::create('class_notes', function (Blueprint $table) {
            $table->increments('id')->comment('Class Note ID');
            $table->integer('teacher_id')->unsigned()->comment('Teacher ID');
            $table->integer('class_id')->unsigned()->comment('Class ID');
            $table->integer('schedules_id')->unsigned()->comment('Schedule ID');
            $table->text('note')->comment('Class Note');

            $table->collation = 'utf8mb4_unicode_ci';

            $table->foreign('teacher_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->foreign('schedules_id')->references('id')->on('schedules')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_notes');
    }
};
