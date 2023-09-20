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
        Schema::create('perpustakaan', function (Blueprint $table) {
            $table->id();
            $table->string('judul_buku');
            $table->string('penulis');
            $table->string('editor');
            $table->string('penerbit');
            $table->date('tanggal_terbit');
            $table->string('isbn');
            $table->string('jumlah_halaman');
            $table->string('jenis_buku');
            $table->integer('harga');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perpustakaan');
    }
};
