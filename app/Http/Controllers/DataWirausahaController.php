<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DataWirausahaController extends Controller
{
    public function edit()
    {
        return view('dashboard-alumni.identitas.wirausaha');
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            // Data yang wirausaha
            'nama_usaha' => [
                'required',
                'max:100'
            ],
            'alamat_usaha' => [
                'required',
                'max:150'
            ],
            'no_telp_usaha' => [
                'required',
                'max:100'
            ],
            'bidang_usaha' => [
                'required',
                'max:100'
            ],
            'jumlah_karyawan' => [
                'required',
                'numeric'
            ],
            'kapan_mulai_usaha' => [
                'required',
                'max:100'
            ]
        ]);

        $data_alumni = auth()->user()->data_alumni;

        $data_alumni->nama_usaha = $request->nama_usaha;
        $data_alumni->alamat_usaha = $request->alamat_usaha;
        $data_alumni->no_telp_usaha = $request->no_telp_usaha;
        $data_alumni->bidang_usaha = $request->bidang_usaha;
        $data_alumni->jumlah_karyawan = $request->jumlah_karyawan;
        $data_alumni->kapan_mulai_usaha = $request->kapan_mulai_usaha;
        $data_alumni->save();

        Alert::success('Berhasil memasukkan data', 'Terimakasih sudah mengisi data informasi wirausaha kamu');
        return redirect('/identitas');
    }
}
