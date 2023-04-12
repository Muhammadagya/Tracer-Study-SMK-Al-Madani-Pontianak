<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePekerjaanRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\DataPekerjaan;
use Illuminate\Http\Request;

class DataPekerjaanController extends Controller
{
    public function edit()
    {
        return view('dashboard-alumni.identitas.pekerjaan');
    }

    public function ambil()
    {
        return view('dashboard-alumni.identitas.pekerjaan');
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            // Data yang bekerja
            'nama_perusahaan' => [
                'required',
                'max:100'
            ],
            'alamat_perusahaan' => [
                'required',
                'max:150'
            ],
            'nomor_telepon_perusahaan' => [
                'required',
                'max:16'
            ],
            'sektor_perusahaan' => [
                'required',
                'max:100'
            ],
            'bulan_tahun_masuk_kerja' => [
                'required',
                'max:16'
            ],
            'jabatan' => [
                'required',
                'max:100'
            ],
            'deskripsi_kerja' => [
                'required',
                'max:150'
            ],
            'sesuai_jurusan' => [
                'required',
                'numeric'
            ],
            'besar_gaji' => [
                'required',
                'numeric'
            ]
        ]);

        $data_alumni = auth()->user()->data_alumni;

        $data_alumni->nama_perusahaan = $request->nama_perusahaan;
        $data_alumni->alamat_perusahaan = $request->alamat_perusahaan;
        $data_alumni->nomor_telepon_perusahaan = $request->nomor_telepon_perusahaan;
        $data_alumni->sektor_perusahaan = $request->sektor_perusahaan;
        $data_alumni->bulan_tahun_masuk_kerja = $request->bulan_tahun_masuk_kerja;
        $data_alumni->jabatan = $request->jabatan;
        $data_alumni->deskripsi_kerja = $request->deskripsi_kerja;
        $data_alumni->sesuai_jurusan = $request->sesuai_jurusan;
        $data_alumni->besar_gaji = $request->besar_gaji;
        $data_alumni->save();

        Alert::success('Berhasil memasukkan data', 'Terimakasih sudah mengisi data informasi pekerjaan kamu');
        return redirect('/identitas');
    }
}
