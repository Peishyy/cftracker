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
        Schema::create('transportations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->enum('mode', ['walking', 'cycling', 'public_transport', 'car', 'motorbike']); // Mode of transportation (enum values)
            $table->float('distance'); // Distance traveled (in kilometers)
            $table->enum('frequency', ['daily', 'weekly', 'monthly']); // Frequency of travel (enum values)
            $table->float('duration'); // Duration of travel (in minutes or hours)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transportations');
    }
};
