<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAlumni extends Model
{
    use HasFactory;

    protected $table = 'data_alumnis';

    // protected $fillable = [
    //     'nama_alumni',
    //     'jurusan',
    //     'tahun_lulus',
    //     'alamat_rumah',
    //     'nomor_telepon',
    //     'setelah_lulus'
    // ];

    protected $guarded = [];
}
