<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('team_pmb', function (Blueprint $table) {
            $table->increments('team_pmb_id');
            $table->string('nama_tim', 50);
            $table->string('jabatan_tim', 100);
            $table->string('foto_tim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_pmb');
    }
};
