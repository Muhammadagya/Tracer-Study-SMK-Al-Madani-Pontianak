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
        return view('dashboard-alumni.identitas.pekerjaan');
    }

    public function store(StorePekerjaanRequest $request)
    {
        // $data = $request->validated();

        // $datapekerjaan = DataPekerjaan::create($data);

        Alert::success('Berhasil memasukkan data', 'Terimakasih sudah mengisi data tentang pekerjaan kamu');
        return redirect('/data-pribadi');
    }
}
