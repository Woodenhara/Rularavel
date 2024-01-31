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
        $levels = ['admin', 'petugas'];
        Schema::create('petugass', function (Blueprint $table) use ($levels) {
            $table->id();
            $table->string('username', 25);
            $table->string('password', 32);
            $table->string('nama_petugas', 35);
            $table->enum('level', $levels);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugass');
    }
};
