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
        Schema::create('jalur_penerimaan', function (Blueprint $table) {
            $table->increments('jalur_penerimaan_id');
            $table->string('nama_jalur', 50);
            $table->date('jadwal_mulai');
            $table->date('jadwal_selesai');
            $table->string('file_jalur');
            $table->string('foto_jalur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jalur_penerimaan');
    }
};
