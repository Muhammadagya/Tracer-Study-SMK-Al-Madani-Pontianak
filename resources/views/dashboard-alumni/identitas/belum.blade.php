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

{{-- Pengisian Data Belum Bekerja/Kuliah --}}
<div class="col-md-6 mt-0 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form ini dikhususkan untuk yang Belum Bekerja / Kuliah</h4>
            <p class="card-description">
                Isilah form di bawah ini dengan sebenar-benarnya
            </p>
            <form class="forms-sample">
                <div class="form-group mb-0">
                    <label>Kegiatan apa yang anda lakukan sekarang</label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="kegiatan" id="kegiatan1" value="">
                            Mencari Pekerjaan
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="kegiatan" id="kegiatan2" value="">
                            Mencari Perguruan Tinggi
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Yang lain</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection