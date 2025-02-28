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
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id')->comment('Student ID');
            $table->integer('user_id')->unsigned()->comment('User ID');
            $table->date('dob')->comment('Date of Birth');
            $table->string('phone', 15)->comment('Phone Number');
            $table->string('address', 255)->comment('Address');
            $table->string('guardian_name', 255)->comment('Guardian Name')->nullable();
            $table->string('guardian_phone', 15)->comment('Guardian Phone')->nullable();

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
        Schema::dropIfExists('students');
    }
};
