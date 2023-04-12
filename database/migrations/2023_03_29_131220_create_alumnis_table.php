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
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('nisn', 10);
            $table->integer('nis');
            $table->string('nama_lengkap', 100);
            $table->string('jurusan', 10);
            $table->integer('tahun_lulus');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnis');
    }
};
