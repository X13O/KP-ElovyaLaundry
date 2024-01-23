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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('category_id');
            $table->foreignId('tipe_cucian_id');
            $table->string('kode_transaksi');
            $table->string('nama_konsumen');
            $table->bigInteger('nomor_konsumen');
            $table->integer('berat_cucian');
            $table->integer('total_harga');
            $table->integer('bayar');
            $table->string('kembalian');
            $table->timestamp('kapan_dibuat')->useCurrent();
            $table->string('status_transaksi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
