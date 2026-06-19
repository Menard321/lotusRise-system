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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('business_name');
            $table->string('owner_name');
            $table->string('tin');
            $table->string('vrn')->nullable();
            $table->string('phone_number');
            $table->string('email');
            $table->string('location');
            $table->string('business_category');
            $table->string('website')->nullable();
            $table->text('business_description');
            $table->string('status')->default('pending'); // pending, approved, suspended
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
