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
        Schema::create('attendances', function (Blueprint $table) {
            $table->increments('id')->comment('Attendance ID');
            $table->integer('student_id')->unsigned()->comment('Student ID');
            $table->integer('class_id')->unsigned()->comment('Class ID');
            $table->integer('schedules_id')->unsigned()->comment('Schedule ID');
            $table->enum('status', ['present', 'absent', 'late'])->comment('Attendance Status');
            $table->text('note')->nullable()->comment('Attendance Note');

            $table->collation = 'utf8mb4_unicode_ci';

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
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
        Schema::dropIfExists('attendances');
    }
};
