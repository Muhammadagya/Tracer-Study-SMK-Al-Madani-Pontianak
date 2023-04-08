@extends('layouts.navbar-auth')

@section('content')
<x-auth-session-status class="mb-4" :status="session('status')" />

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h4 class="section-title bg-white text-center text-primary px-3">MASUK</h4>
            <h3 class="mb-5">Masuk Untuk Melanjutkan</h3>
        </div>
        {{-- Form pengisian masuk dimulai --}}
        <div style="margin:0% auto;width:center" class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
            {{-- <main class="form-login"> --}}
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row g-3">
                    {{-- Masukkan alamat e-mail --}}
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input id="email" class="form-control" type="email" name="email"
                                placeholder="nama@contoh.com" autofocus required value="{{ old('email') }}">

                            <label for="email">Masukkan alamat email anda</label>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>
                    {{-- Masukkan password --}}
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input id="password" class="form-control" type="password" name="password" required
                                autocomplete="current-password" placeholder="Password">

                            <label for="password">Masukkan kata sandi anda</label>

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                    </div>
                    {{-- Tombol submit --}}
                    <x-primary-button>
                        {{ __('Masuk') }}
                    </x-primary-button>
                </div>
            </form>
            <small class="d-block text-center mt-3">Belum mempunyai akun?
                <a href="{{ route('register') }}">Registrasi sekarang!</a>
            </small>
        </div>
    </div>
</div>
<!-- Login End -->
@endsection
