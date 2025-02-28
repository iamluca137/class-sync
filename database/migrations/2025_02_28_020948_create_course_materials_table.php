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
        Schema::create('course_materials', function (Blueprint $table) {
            $table->increments('id')->comment('Course Material ID');
            $table->integer('course_id')->unsigned()->comment('Course ID');
            $table->integer('teacher_id')->unsigned()->comment('Teacher ID');
            $table->string('title', 255)->comment('Title of the course material');
            $table->string('file_path')->comment('File path of the course material');

            $table->collation = 'utf8mb4_unicode_ci';

            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('teacher_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_materials');
    }
};
