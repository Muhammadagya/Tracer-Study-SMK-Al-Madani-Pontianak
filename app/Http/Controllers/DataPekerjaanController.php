<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPekerjaanController extends Controller
{
    public function create()
    {
        return view('dashboard-alumni.pengisian-data-pribadi');
    }

    // public function store(StoreAlumniRequest $request)
    // {
    //     $data = $request->validated();

    //     $data_alumnis = DataAlumni::create($data);

    //     Alert::success('Berhasil memasukkan data', 'Terimakasih sudah mengisi data diri');
    //     return redirect('/data-pribadi');
    // }
}
