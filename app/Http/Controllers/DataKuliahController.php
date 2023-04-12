<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DataKuliahController extends Controller
{
    public function edit()
    {
        return view('dashboard-alumni.identitas.kuliah');
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            // Data yang kuliah
            'nama_universitas' => [
                'required',
                'max:100'
            ],
            'alamat_universitas' => [
                'required',
                'max:150'
            ],
            'fakultas' => [
                'required',
                'max:100'
            ],
            'jurusan_kuliah' => [
                'required',
                'max:100'
            ],
            'jenjang_pendidikan' => [
                'required',
                'numeric'
            ],
            'kapan_masuk' => [
                'required',
                'max:100'
            ]
        ]);

        $data_alumni = auth()->user()->data_alumni;

        $data_alumni->nama_universitas = $request->nama_universitas;
        $data_alumni->alamat_universitas = $request->alamat_universitas;
        $data_alumni->fakultas = $request->fakultas;
        $data_alumni->jurusan_kuliah = $request->jurusan_kuliah;
        $data_alumni->jenjang_pendidikan = $request->jenjang_pendidikan;
        $data_alumni->kapan_masuk = $request->kapan_masuk;
        $data_alumni->save();

        Alert::success('Berhasil memasukkan data', 'Terimakasih sudah mengisi data informasi perkuliahan kamu');
        return redirect('/identitas');
    }
}
