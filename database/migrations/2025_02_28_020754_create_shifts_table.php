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
        Schema::create('shifts', function (Blueprint $table) {
            $table->increments('id')->comment('Shift ID');
            $table->string('name', 100)->comment('Shift Name');
            $table->time('start_time')->comment('Shift Start Time');
            $table->time('end_time')->comment('Shift End Time');

            $table->collation = 'utf8mb4_general_ci';

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shifts');
    }
};
