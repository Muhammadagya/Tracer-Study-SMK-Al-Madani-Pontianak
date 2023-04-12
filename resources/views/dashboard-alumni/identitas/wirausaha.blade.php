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

{{-- Pengisian Data Wirausaha --}}
<div class="col-md-6 mt-4 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form ini dikhususkan untuk yang Wirausaha</h4>
            <p class="card-description">
                Isilah form di bawah ini dengan sebenar-benarnya
            </p>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="#" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputUsername1">Nama Usaha</label>
                    <input type="text" class="form-control" id="InputNameCompany" required autofocus name="nama_usaha" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Usaha</label>
                    <input type="text" class="form-control" id="" required autofocus name="alamat_usaha" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nomor Telepon Tempat Usaha</label>
                    <input type="text" class="form-control" id="Telephone" required autofocus name="no_telp_usaha" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmPassword1" class="mb-0">Bidang Usaha</label>
                    <p class="card-description">
                        Contoh: Perdagangan Jasa, Kontraktor, Maintenance, dsb.
                    </p>
                    <input type="text" class="form-control" id="" required autofocus name="bidang_usaha" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="mb-0">Jumlah Karyawan</label>
                    <input type="text" class="form-control" id="" name="jumlah_karyawan" required autofocus placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Bulan dan Tahun Membuka Usaha</label>
                    <p class="card-description">
                        Contoh: Januari 2023.
                    </p>
                    <input type="text" class="form-control" id="" name="kapan_mulai_usaha" required autofocus placeholder="Jawaban kamu">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection