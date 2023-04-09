@extends('dashboard-alumni.layouts.main')

@section('content')

<div class="col-12 col-xl-8 mb-4 mb-xl-0">
    <h3 class="font-weight-bold">Selamat Datang, {{ auth()->user()->name }} {{ auth()->user()->data_alumni->nis }}</h3>
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
{{-- Pengisian Data Pribadi --}}
<div class="col-md-6 mt-4 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            {{-- <x-successs-status class="mb-4" :status="session('message')" /> --}}

            <h4 class="card-title">Identitas Diri Alumni/Lulusan</h4>
            <p class="card-description">
                Isilah form di bawah ini dengan sebenar-benarnya
            </p>
            {{-- <form class="forms-sample"> --}}
            <form action="#" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName">Masukkan Nama Lengkap Kamu</label>
                    <input id="nama_alumni" type="text" name="nama_alumni" required autofocus class="form-control"
                        id="nama_alumni" placeholder="Nama lengkap">
                </div>
                <div class="form-group">
                    <label>Kompetensi Keahlian</label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input id="jurusan" type="radio" name="jurusan" required autofocus class="form-check-input"
                                value="RPL">
                            Rekayasa Perangkat Lunak (RPL)
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input id="jurusan" type="radio" name="jurusan" required autofocus class="form-check-input"
                                value="TKJ">
                            Teknik Komputer dan Jaringan (TKJ)
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputYear" class="mb-0">Tahun Lulus</label>
                    <p class="card-description">
                        Contoh: 2023
                    </p>
                    <input id="tahun_lulus" type="text" name="tahun_lulus" required autofocus class="form-control"
                        placeholder="Tahun lulus">
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Alamat Rumah Saat Ini</label>
                    <input id="alamat_rumah" type="text" name="alamat_rumah" required autofocus class="form-control"
                        placeholder="Alamat rumah">
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Nomor Telepon/Hp</label>
                    <input id="nomor_telepon" type="text" name="nomor_telepon" required autofocus class="form-control"
                        placeholder="Nomor telepon/hp yang aktif">
                </div>
                <div class="form-group">
                    <label>Kegiatan Kamu Saat Ini Setelah Lulus</label>
                    <select name="setelah_lulus" class="form-control">
                        <option value="1">Bekerja</option>
                        <option value="2">Wirausaha</option>
                        <option value="3">Kuliah</option>
                        <option value="4">Belum Bekerja/Kuliah</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection
