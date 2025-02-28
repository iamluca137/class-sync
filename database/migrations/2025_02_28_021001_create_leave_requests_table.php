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
        Schema::create('leave_requests', function (Blueprint $table) {
            $table->increments('id')->comment('Leave Request ID');
            $table->integer('user_id')->unsigned()->comment('User ID');
            $table->integer('class_id')->unsigned()->comment('Class ID');
            $table->integer('schedules_id')->unsigned()->comment('Schedule ID');
            $table->text('reason')->comment('Reason for leave');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending')->comment('Status of leave request');
            $table->integer('approved_by')->unsigned()->nullable()->comment('User ID who approved the leave request');
            $table->timestamp('approved_at')->nullable()->comment('Date and time when the leave request was approved');

            $table->collation = 'utf8mb4_unicode_ci';

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->foreign('schedules_id')->references('id')->on('schedules')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_requests');
    }
};
