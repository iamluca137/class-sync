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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->increments('id')->comment('Enrollment ID');
            $table->integer('student_id')->unsigned()->comment('Student ID');
            $table->integer('class_id')->unsigned()->comment('Class ID');
            $table->timestamp('enrolled_at')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Enrollment Date');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending')->comment('Enrollment Status');

            $table->collation = 'utf8mb4_unicode_ci';

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
