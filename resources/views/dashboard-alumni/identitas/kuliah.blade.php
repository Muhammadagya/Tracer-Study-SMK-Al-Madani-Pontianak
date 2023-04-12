@extends('dashboard-alumni.layouts.main')

@section('content')

<div class="col-12 col-xl-8 mb-4 mb-xl-0">
    <h3 class="font-weight-bold">Selamat Datang, {{ auth()->user()->name }}</h3>
    {{-- {{ auth()->user()->name }} --}}
    <h6 class="font-weight-normal mb-0">Ayo segera isi data kamu guna meningkatkan mutu pendidikan di SMK Al-Madani
        Pontianak!</h6>
</div>

<div class="col-12 col-xl-8 mb-4 mb-xl-0 mt-4">
    <h3 class="font-weight-bold">Petunjuk pengisian data:</h3>
    <h6 class="font-weight-normal mb-0">1. Alumni mengisi identitas diri.</h6>
    <h6 class="font-weight-normal mb-0">2. Bagi yang Bekerja silahkan mengisi form yang telah disediakan.</h6>
    <h6 class="font-weight-normal mb-0">3. Bagi yang Kuliah silahkan mengisi form yang telah disediakan.</h6>
    <h6 class="font-weight-normal mb-0">4. Bagi yang Wirausaha silahkan mengisi form yang telah disediakan.</h6>
    <h6 class="font-weight-normal mb-0">5. Bagi yang Belum Bekerja/Kuliah silahkan mengisi form yang telah disediakan.
    </h6>
    <h6 class="font-weight-normal mb-0">6. Dimohon agar mengisi data ini dengan jujur.</h6>
</div>

{{-- Pengisian Data Kuliah --}}
<div class="col-md-6 mt-4 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form ini dikhususkan untuk yang Kuliah</h4>
            <p class="card-description">
                Isilah form di bawah ini dengan sebenar-benarnya
            </p>
            <!-- /resources/views/post/create.blade.php -->
 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<!-- Create Post Form -->
            <form action="#" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputUsername1">Nama Perguruan Tinggi / Universitas</label>
                    <input type="text" class="form-control" id="UniversityName" required autofocus name="nama_universitas" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Perguruan Tinggi / Universitas</label>
                    <input type="text" class="form-control" id="UniversityAddress" required autofocus name="alamat_universitas" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Fakultas</label>
                    <input type="text" class="form-control" id="" name="fakultas" required autofocus placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmPassword1" class="mb-0">Jurusan / Prodi</label>
                    <input type="text" class="form-control" id="" name="jurusan_kuliah" required autofocus placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label>Jenjang Pendidikan</label>
                    <select name="jenjang_pendidikan" required autofocus class="form-control">
                        <option value="1">D1</option>
                        <option value="2">D2</option>
                        <option value="3">D3</option>
                        <option value="4">D4</option>
                        <option value="5">S1</option>
                        <option value="6">S2</option>
                        <option value="7">S3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmPassword1" class="mb-0">Bulan dan Tahun Masuk Kuliah</label>
                    <p class="card-description">
                        Contoh: Januari 2023
                    </p>
                    <input type="text" class="form-control" id="" required autofocus name="kapan_masuk" placeholder="Jawaban kamu">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection