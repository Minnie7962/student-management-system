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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id(); // This is the auto-increment primary key
            $table->unsignedBigInteger('user_id'); // Use unsignedBigInteger to match the users table ID type
            $table->string('title');
            $table->text('body')->nullable();
            $table->timestamp('read_at')->nullable();
            $table->timestamps(); // Automatically handles created_at and updated_at

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
