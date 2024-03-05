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
        Schema::create('master_berita', function (Blueprint $table) {
            $table->id('berita_id');
            $table->string('token_berita', 30);
            $table->date('tanggal_berita');
            $table->text('judul_berita', 150);
            $table->string('foto_berita', 30);
            $table->text('isi_berita');
            $table->boolean('status');
            $table->foreignId('master_kategoris_id')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_berita');
    }
};
