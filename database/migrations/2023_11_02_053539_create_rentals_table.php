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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->integer('vehicleId');
            $table->integer('customerId');
            $table->date('rentDate');
            $table->date('returnDate');
            $table->integer('totalPrice');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('vehicleId')->references('id')->on('vehicles');
            $table->foreign('customerId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
