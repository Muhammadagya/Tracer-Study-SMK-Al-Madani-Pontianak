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

{{-- Pengisian Data Pekerjaan --}}
<div class="col-md-6 mt-4 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form ini dikhususkan untuk yang Bekerja</h4>
            <p class="card-description">
                Isilah form di bawah ini dengan sebenar-benarnya
            </p>
            <form action="#" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputUsername1">Nama Perusahaan / Industri / Lembaga</label>
                    <input id="companyName" type="text" name="nama_perusahaan" required autofocus class="form-control" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Perusahaan / Industri / Lembaga</label>
                    <input id="companyAddress" type="text" name="alamat_perusahaan" required autofocus class="form-control" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nomor Telp. Perusahaan / Industri / Lembaga</label>
                    <input id="companyTelephone" type="text" name="nomor_telepon_perusahaan" required autofocus class="form-control" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmPassword1" class="mb-0">Sektor Perusahaan / Industri /
                        Lembaga</label>
                    <p class="card-description">
                        Contoh: Manufacture, Jasa, Keuangan, dsb.
                    </p>
                    <input id="companySector" type="text" name="sektor_perusahaan" required autofocus class="form-control"placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="mb-0">Bulan dan Tahun Masuk Kerja</label>
                    <p class="card-description">
                        Contoh: Januari 2023
                    </p>
                    <input id="monthandyearEntertheCompany" type="text" name="bulan_tahun_masuk_kerja" required autofocus class="form-control" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jabatan</label>
                    <input id="position" type="text" name="jabatan" required autofocus class="form-control" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi Pekerjaan</label>
                    <input id="description" type="text" name="deskripsi_kerja" required autofocus class="form-control" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label>Sesuai Dengan Kompetensi Keahlian</label>
                    <select name="sesuai_jurusan" required autofocus class="form-control">
                        <option value="1">Iya</option>
                        <option value="2">Tidak</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Besar Gaji</label>
                    <select name="besar_gaji" required autofocus class="form-control">
                        <option value="1">Kurang dari Rp. 500.000</option>
                        <option value="2">Antara Rp. 500.000 - Rp. 1.000.000</option>
                        <option value="3">Antara Rp. 1.000.000 - Rp. 1.500.000</option>
                        <option value="4">Antara Rp. 1.500.000 - Rp. 2.000.000</option>
                        <option value="5">Di atas Rp. 2.000.000</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection