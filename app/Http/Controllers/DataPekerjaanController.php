<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePekerjaanRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\DataPekerjaan;
use Illuminate\Http\Request;

class DataPekerjaanController extends Controller
{
    public function create()
    {
        return view('dashboard-alumni.pengisian-data-pribadi');
    }

    public function store(StorePekerjaanRequest $request)
    {
        $data = $request->validated();

        $data_pekerjaans = DataPekerjaan::create($data);

        Alert::success('Berhasil memasukkan data', 'Terimakasih sudah mengisi data tentang pekerjaan kamu');
        return redirect('/data-pribadi');
    }
}
