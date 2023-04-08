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
        Schema::create('data_alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alumni', 100);
            $table->string('jurusan', 30);
            $table->string('tahun_lulus', 4);
            $table->string('alamat_rumah', 100);
            $table->string('nomor_telepon', 16);
            $table->string('setelah_lulus', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_alumnis');
    }
};
