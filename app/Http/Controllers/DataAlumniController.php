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
        return view('dashboard-alumni.pengisian-data-pribadi');
    }

    public function store(StoreAlumniRequest $request)
    {
        $data = $request->validated();

        $data_alumnis = DataAlumni::create($data);

        Alert::success('Berhasil memasukkan data', 'Terimakasih sudah mengisi data diri');
        return redirect('/data-pribadi');
    }
}
