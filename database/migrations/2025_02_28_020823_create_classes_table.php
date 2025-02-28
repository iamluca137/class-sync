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
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('id')->comment('Class ID');
            $table->string('name', 255)->comment('Class Name');
            $table->integer('course_id')->unsigned()->comment('Course ID');
            $table->integer('teacher_id')->unsigned()->comment('Teacher ID');
            $table->date('start_date')->nullable()->comment('Start Date');
            $table->date('end_date')->nullable()->comment('End Date');
            $table->enum('status', ['pending', 'open', 'in_progress', 'completed'])->default('pending')->comment('Status');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
