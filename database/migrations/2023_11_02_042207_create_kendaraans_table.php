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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id(); // Menambahkan kolom ID dengan tipe data yang sesuai.
            $table->string('name'); // Kolom nama dengan tipe data string.
            $table->unsignedBigInteger('typeId'); // Kolom typeId dengan tipe data unsignedBigInteger (asumsi foreign key).
            $table->string('license'); // Kolom license dengan tipe data string.
            $table->integer('dailyprice'); // Kolom dailyprice dengan tipe data integer.
            $table->tinyInteger('status'); // Kolom status dengan tipe data tinyInteger.
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
