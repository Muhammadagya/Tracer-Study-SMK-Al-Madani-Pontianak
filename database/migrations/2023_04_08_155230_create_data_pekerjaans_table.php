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
        Schema::create('data_pekerjaans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan', 100);
            $table->string('alamat_perusahaan', 150);
            $table->string('nomor_telepon', 16);
            $table->string('sektor_perusahaan', 100);
            $table->string('bulan_tahun_masuk_kerja', 16);
            $table->string('jabatan', 100);
            $table->string('deskripsi_kerja', 150);
            $table->string('sesuai_jurusan', 10);
            $table->string('besar_gaji', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pekerjaans');
    }
};
