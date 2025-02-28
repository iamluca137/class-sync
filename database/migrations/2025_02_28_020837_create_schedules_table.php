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
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id')->comment('Schedule ID');
            $table->integer('class_id')->unsigned()->comment('Class ID');
            $table->integer('teacher_id')->unsigned()->comment('Teacher ID');
            $table->enum('day_of_week', ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'])->comment('Day of Week');
            $table->integer('shift_id')->unsigned()->comment('Shift ID');
            $table->enum('status', ['pending', 'in_progress', 'completed'])->default('pending')->comment('Status');
            $table->text('note')->nullable()->comment('Note');

            $table->collation = 'utf8mb4_unicode_ci';

            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->foreign('shift_id')->references('id')->on('shifts')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
