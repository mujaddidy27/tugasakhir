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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('kode_reg');
            $table->unsignedBigInteger('pasien_id');
            $table->unsignedBigInteger('mitra_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('order_item_id');
            $table->unsignedBigInteger('jenis_pemeriksaan_id');
            $table->string('keterangan')->nullable();
            $table->enum('status', ['selesai', 'proses'])->default('proses');
            $table->timestamps();

            $table->foreign('pasien_id')->references('id')->on('pasiens')->onDelete('cascade');
            $table->foreign('mitra_id')->references('id')->on('mitras')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('order_item_id')->references('id')->on('order_items')->onDelete('cascade');
            $table->foreign('jenis_pemeriksaan_id')->references('id')->on('jenis_pemeriksaans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
