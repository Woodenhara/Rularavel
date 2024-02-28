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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_user")->references("id")->on("users");
            $table->char('nisn', 10)->index();
            $table->foreign('nisn')->references('nisn')->on('siswas');
            $table->date('tgl_bayar');
            $table->foreignId("id_spp")->references("id")->on("spps");
            $table->integer('jumlah_bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
