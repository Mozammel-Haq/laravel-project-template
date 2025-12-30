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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clinic_id')->constrained()->restrictOnDelete();
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->boolean('is_two_factor_enabled')->default(false);
            $table->enum('status', ['active', 'inactive', 'blocked'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
