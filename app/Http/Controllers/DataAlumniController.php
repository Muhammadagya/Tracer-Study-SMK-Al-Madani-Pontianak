<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumniRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\DataAlumni;
use Illuminate\Http\Request;

class DataAlumniController extends Controller
{
    public function create()
    {
        return view('dashboard-alumni.identitas.identitas');
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'nama_alumni' => [
                'required',
                'max:100'
            ],
            'jurusan' => [
                'required',
                'max:30'
            ],
            'tahun_lulus' => [
                'required',
                'max:4'
            ],
            'alamat_rumah' => [
                'required',
                'max:100'
            ],
            'setelah_lulus' => [
                'required',
                'string'
            ],
            'nomor_telepon' => [
                'required',
                'max:16'
            ]
        ]);

        $data_alumni = auth()->user()->data_alumni;

        $data_alumni->nama_alumni = $request->nama_alumni;
        $data_alumni->jurusan = $request->jurusan;
        $data_alumni->tahun_lulus = $request->tahun_lulus;
        $data_alumni->alamat_rumah = $request->alamat_rumah;
        $data_alumni->setelah_lulus = $request->setelah_lulus;
        $data_alumni->nomor_telepon = $request->nomor_telepon;
        $data_alumni->save();

        Alert::success('Berhasil memasukkan data', 'Terimakasih sudah mengisi data diri');

        if($request->setelah_lulus==1){
            return redirect()->route('dashboard.identitas.bekerja');
        } else if($request->setelah_lulus==2){
            return 'ini wirausaha';
        } else if($request->setelah_lulus==3){
            return 'ini ww';
        } else if($request->setelah_lulus==4){
            return 'ini ww';
        }
        
    }
}
