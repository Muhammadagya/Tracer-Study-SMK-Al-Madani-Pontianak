@extends('layouts.navbar-auth')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h4 class="section-title bg-white text-center text-primary px-3">REGISTRASI</h4>
            <h3 class="mb-0">Silahkan Melakukan Registrasi</h3>
            <h3 class="mb-5">Akun Untuk Melanjutkan</h3>
        </div>
            {{-- Form pengisian registrasi dimulai --}}
            <div style="margin:0% auto;width:center" class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row g-3">
                {{-- Masukkan nama --}}
                <div class="col-md-12">
                    <div class="form-floating">
                        <input id="name" class="form-control" type="text" name="name" :value="old('name')" placeholder="Nama" required value="{{ old('name') }}">

                        <label for="name">Masukkan nama lengkap anda</label>

                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                </div>

                 {{-- Tanggal lahir --}}
                 <div class="col-md-12">
                    <div class="form-floating">
                        <input id="tanggal_lahir" class="form-control" type="date" name="tanggal_lahir" :value="old('tanggal_lahir')" placeholder="Tanggal Lahir" required value="{{ old('tanggal_lahir') }}">

                        <label for="tanggal_lahir">Tanggal lahir anda</label>

                    </div>
                </div>
                
                {{-- Masukkan alamat e-mail --}}
                <div class="col-md-12">
                    <div class="form-floating">
                        <input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="Email" required value="{{ old('email') }}">

                        <label for="email">Masukkan alamat e-mail valid anda</label>

                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>
                {{-- Masukkan kata sandi --}}
                <div class="col-md-12">
                    <div class="form-floating">
                        <input id="password" class="form-control"
                        type="password"
                        name="password"
                        placeholder="Password"
                        required autocomplete="new-password">

                        <label for="password">Masukkan kata sandi anda</label>

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>
                <!-- Konfirmasi kata sandi -->
                <div class="col-md-12">
                    <div class="form-floating">
                        <input id="password_confirmation" class="form-control"
                        type="password"
                        name="password_confirmation"
                        placeholder="Password"
                        required autocomplete="new-password">

                        <label for="password">Konfirmasi kata sandi anda</label>

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>
                {{-- Tombol submit --}}
                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </form>
            <small class="d-block text-center mt-3">Sudah mempunyai akun?
                <a href="{{ route('login') }}">Masuk</a>
            </small>
        </div>
    </div>
</div>
@endsection