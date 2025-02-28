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
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id')->comment('Teacher ID');
            $table->integer('user_id')->unsigned()->unique()->comment('User ID');
            $table->string('phone', 15)->nullable()->comment('Phone number');
            $table->string('address', 255)->comment('Address');
            $table->text('qualification')->comment('Qualification');
            $table->text('experience')->comment('Experience');

            $table->collation = 'utf8mb4_unicode_ci';

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
