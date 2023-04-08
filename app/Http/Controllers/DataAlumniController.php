<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumniRequest;
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

        $alumni = DataAlumni::create($data);
        return redirect('/data-pribadi')->with('message', 'Data berhasil dimasukkan!');
    }
}
