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
<div class="col-md-6 mt-0 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form ini dikhususkan untuk yang Kuliah</h4>
            <p class="card-description">
                Isilah form di bawah ini dengan sebenar-benarnya
            </p>
            <form class="forms-sample">
                <div class="form-group">
                    <label for="exampleInputUsername1">Nama Perguruan Tinggi / Universitas</label>
                    <input type="text" class="form-control" id="exampleInputNameCompany" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Perguruan Tinggi / Universitas</label>
                    <input type="text" class="form-control" id="" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Fakultas</label>
                    <input type="text" class="form-control" id="Telephone" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmPassword1" class="mb-0">Jurusan / Prodi</label>
                    <p class="card-description">
                        Contoh: Manufacture, Jasa, Keuangan, dsb.
                    </p>
                    <input type="text" class="form-control" id="" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label>Jenjang Pendidikan</label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="komptensiKeahlian"
                                id="jenjangPendidikan1" value="">
                            D1
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="komptensiKeahlian"
                                id="jenjangPendidikan2" value="">
                            D2
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="komptensiKeahlian"
                                id="jenjangPendidikan3" value="">
                            D3
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="komptensiKeahlian"
                                id="jenjangPendidikan4" value="">
                            D4
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="komptensiKeahlian"
                                id="jenjangPendidikan5" value="">
                            S1
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="komptensiKeahlian"
                                id="jenjangPendidikan6" value="">
                            S2
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="komptensiKeahlian"
                                id="jenjangPendidikan7" value="">
                            S3
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmPassword1" class="mb-0">Bulan dan Tahun Masuk Kuliah</label>
                    <p class="card-description">
                        Contoh: Januari 2023
                    </p>
                    <input type="text" class="form-control" id="" placeholder="Jawaban kamu">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection