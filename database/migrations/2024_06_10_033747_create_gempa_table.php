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
        Schema::create('gempa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tanggal');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('radius');
            $table->string('korban');
            $table->string('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gempa');
    }
};
