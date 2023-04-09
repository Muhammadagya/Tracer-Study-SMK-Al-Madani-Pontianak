<?php

use App\Models\User;
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
            $table->foreignIdFor(User::class);
            $table->string('nama_alumni', 100);
            $table->string('nisn', 10);
            $table->integer('nis');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir', 100);
            $table->string('jurusan', 30)->nullable();
            $table->string('tahun_lulus', 4)->nullable();
            $table->string('alamat_rumah', 100)->nullable();
            $table->string('nomor_telepon', 16)->nullable();
            $table->tinyInteger('setelah_lulus')->nullable();

            // untuk bekerja
            $table->string('nama_perusahaan', 100)->nullable();
            $table->string('alamat_perusahaan', 150)->nullable();
            $table->string('nomor_telepon_perusahaan', 16)->nullable();
            $table->string('sektor_perusahaan', 100)->nullable();
            $table->string('bulan_tahun_masuk_kerja', 16)->nullable();
            $table->string('jabatan', 100)->nullable();
            $table->string('deskripsi_kerja', 150)->nullable();
            $table->string('sesuai_jurusan', 10)->nullable();
            $table->string('besar_gaji', 50)->nullable();

            // untuk kuliah


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
