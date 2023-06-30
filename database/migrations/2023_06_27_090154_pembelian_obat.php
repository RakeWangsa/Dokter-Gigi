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
        Schema::create('pembelian_obat', function (Blueprint $table) {
            $table->id();
            // $table->timestamps();
            $table->string('id_user');
            $table->string('nama');
            $table->string('nama_obat');
            $table->integer('total_harga');
            $table->datetime('waktu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
