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
        Schema::create('kurumlars', function (Blueprint $table) {
            $table->id();
            $table->string('kurum_user_name');
            $table->string('kurum_user_surname');
            $table->string('kurum_adi');
            $table->string('kurum_email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('kurum_phonenumber');
            $table->string('kurum_password');
            $table->string('kurum_hakkinda')->nullable();
            $table->integer('permission')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kurumlars');
    }
};
