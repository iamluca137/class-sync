<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id')->comment('Course ID');
            $table->string('name', 255)->comment('Course Name');
            $table->text('description')->nullable()->comment('Course Description');
            $table->enum('status', ['pending', 'open', 'closed'])->default('pending')->comment('Course Status');

            $table->collation = 'utf8mb4_unicode_ci';

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
