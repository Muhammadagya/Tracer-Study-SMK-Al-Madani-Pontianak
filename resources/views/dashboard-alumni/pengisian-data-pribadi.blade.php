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

@include('sweetalert::alert')
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
                <form action="/data-pribadi" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName">Masukkan Nama Lengkap Kamu</label>
                        <input id="nama_alumni" type="text" name="nama_alumni" required autofocus class="form-control" id="nama_alumni"
                            placeholder="Nama lengkap">
                    </div>
                    <div class="form-group">
                        <label>Kompetensi Keahlian</label>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input id="jurusan" type="radio" name="jurusan" required autofocus class="form-check-input" value="RPL">
                                Rekayasa Perangkat Lunak (RPL)
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input id="jurusan" type="radio" name="jurusan" required autofocus class="form-check-input" value="TKJ">
                                Teknik Komputer dan Jaringan (TKJ)
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputYear" class="mb-0">Tahun Lulus</label>
                        <p class="card-description">
                            Contoh: 2023
                        </p>
                        <input id="tahun_lulus" type="text" name="tahun_lulus" required autofocus class="form-control"placeholder="Tahun lulus">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Alamat Rumah Saat Ini</label>
                        <input id="alamat_rumah" type="text" name="alamat_rumah" required autofocus class="form-control" placeholder="Alamat rumah">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nomor Telepon/Hp</label>
                        <input id="nomor_telepon" type="text" name="nomor_telepon" required autofocus class="form-control" placeholder="Nomor telepon/hp yang aktif">
                    </div>
                    <div class="form-group">
                        <label>Kegiatan Kamu Saat Ini Setelah Lulus</label>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input id="setelah_lulus" type="radio" name="setelah_lulus" required autofocus class="form-check-input" value="Bekerja">
                                Bekerja
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input id="setelah_lulus" type="radio" name="setelah_lulus" required autofocus class="form-check-input" value="Wirausaha">
                                Wirausaha
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input id="setelah_lulus" type="radio" name="setelah_lulus" required autofocus class="form-check-input" value="Kuliah">
                                Kuliah
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input id="setelah_lulus" type="radio" name="setelah_lulus" required autofocus class="form-check-input" value="Belum Bekerja/Kuliah">
                                Belum Bekerja/Kuliah
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
        </div>
    </div>
</div>

{{-- Pengisian Data Pekerjaan --}}
<div class="col-md-6 mt-4 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form ini dikhususkan untuk yang Bekerja</h4>
            <p class="card-description">
                Isilah form di bawah ini dengan sebenar-benarnya
            </p>
            <form class="forms-sample">
                <div class="form-group">
                    <label for="exampleInputUsername1">Nama Perusahaan / Industri / Lembaga</label>
                    <input type="text" class="form-control" id="exampleInputNameCompany" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Perusahaan / Industri / Lembaga</label>
                    <input type="text" class="form-control" id="" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nomor Telp. Perusahaan / Industri / Lembaga</label>
                    <input type="text" class="form-control" id="Telephone" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmPassword1" class="mb-0">Sektor Perusahaan / Industri /
                        Lembaga</label>
                    <p class="card-description">
                        Contoh: Manufacture, Jasa, Keuangan, dsb.
                    </p>
                    <input type="text" class="form-control" id="" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="mb-0">Bulan dan Tahun Masuk Kerja</label>
                    <p class="card-description">
                        Contoh: Januari 2023
                    </p>
                    <input type="text" class="form-control" id="" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jabatan</label>
                    <input type="text" class="form-control" id="" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi Pekerjaan</label>
                    <input type="text" class="form-control" id="" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label>Sesuai Dengan Kompetensi Keahlian</label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="komptensiKeahlian"
                                id="komptensiKeahlian1" value="">
                            Ya
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="komptensiKeahlian"
                                id="komptensiKeahlian2" value="">
                            Tidak
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Besar Gaji</label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="besarGaji" id="besarGaji1" value="">
                            Kurang dari Rp. 500.000
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="besarGaji" id="besarGaji2" value="">
                            Antara Rp. 500.000, — Rp. 1.000.000
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="besarGaji" id="besarGaji3" value="">
                            Antara Rp. 1.000.000, — Rp. 1.500.000
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="besarGaji" id="besarGaji4" value="">
                            Antara Rp. 1.500.000, — Rp. 2.000.000
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="besarGaji" id="besarGaji5" value="">
                            Di atas Rp. 2.000.000
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>

{{-- Pengisian Data Pekerjaan (Backup)--}}
{{-- <div class="col-md-6 mt-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Form ini dikhususkan untuk yang Bekerja</h4>
      <p class="card-description">
        Isilah form di bawah ini dengan sebenar-benarnya
      </p>
      <form class="forms-sample">
        <div class="form-group">
          <label for="exampleInputUsername1">Nama Perusahaan / Industri / Lembaga</label>
          <input type="text" class="form-control" id="exampleInputNameCompany" placeholder="Jawaban kamu">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Alamat Perusahaan / Industri / Lembaga</label>
          <input type="text" class="form-control" id="" placeholder="Jawaban kamu">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Nomor Telp. Perusahaan / Industri / Lembaga</label>
          <input type="text" class="form-control" id="Telephone" placeholder="Jawaban kamu">
        </div>
        <div class="form-group">
          <label for="exampleInputConfirmPassword1" class="mb-0">Sektor Perusahaan / Industri / Lembaga</label>
          <p  class="card-description">
            Contoh: Manufacture, Jasa, Keuangan, dsb.
          </p>
          <input type="text" class="form-control" id="" placeholder="Jawaban kamu">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1" class="mb-0">Bulan dan Tahun Masuk Kerja</label>
          <p  class="card-description">
            Contoh: Januari 2023
          </p>
          <input type="text" class="form-control" id="" placeholder="Jawaban kamu">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Jabatan</label>
          <input type="text" class="form-control" id="" placeholder="Jawaban kamu">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Deskripsi Pekerjaan</label>
          <input type="text" class="form-control" id="" placeholder="Jawaban kamu">
        </div>
        <div class="form-group">
          <label>Sesuai Dengan Kompetensi Keahlian</label>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="komptensiKeahlian" id="komptensiKeahlian1" value="">
              Ya
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="komptensiKeahlian" id="komptensiKeahlian2" value="">
              Tidak
            </label>
          </div>
        </div>
        <div class="form-group">
          <label>Besar Gaji</label>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="besarGaji" id="besarGaji1" value="">
              Kurang dari Rp. 500.000
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="besarGaji" id="besarGaji2" value="">
              Antara Rp. 500.000, — Rp. 1.000.000
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="besarGaji" id="besarGaji3" value="">
              Antara Rp. 1.000.000, — Rp. 1.500.000
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="besarGaji" id="besarGaji4" value="">
              Antara Rp. 1.500.000, — Rp. 2.000.000
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="besarGaji" id="besarGaji5" value="">
              Di atas Rp. 2.000.000
            </label>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
</div> --}}

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

{{-- Pengisian Data Wirausaha --}}
<div class="col-md-6 mt-0 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form ini dikhususkan untuk yang Wirausaha</h4>
            <p class="card-description">
                Isilah form di bawah ini dengan sebenar-benarnya
            </p>
            <form class="forms-sample">
                <div class="form-group">
                    <label for="exampleInputUsername1">Nama Usaha</label>
                    <input type="text" class="form-control" id="exampleInputNameCompany" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Usaha</label>
                    <input type="text" class="form-control" id="" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nomor Telepon Tempat Usaha</label>
                    <input type="text" class="form-control" id="Telephone" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmPassword1" class="mb-0">Bidang Usaha</label>
                    <p class="card-description">
                        Contoh: Perdagangan Jasa, Kontraktor, Maintenance, dsb.
                    </p>
                    <input type="text" class="form-control" id="" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="mb-0">Jumlah Karyawan</label>
                    <input type="text" class="form-control" id="" placeholder="Jawaban kamu">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Bulan dan Tahun Membuka Usaha</label>
                    <p class="card-description">
                        Contoh: Januari 2023.
                    </p>
                    <input type="text" class="form-control" id="" placeholder="Jawaban kamu">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
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
