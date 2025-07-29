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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('seller_id')->constrained('users')->onDelete('cascade');
            $table->enum('type', ['physique', 'morale']);
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('raison_sociale')->nullable();
            $table->string('tel');
            $table->string('email')->unique();
        

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
