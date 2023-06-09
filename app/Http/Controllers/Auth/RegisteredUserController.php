<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\DataAlumni;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required', 'date'],
            'email' => ['required', 'string', 'email:dns', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $check = Alumni::where('nama_lengkap', $request->name)->where('tanggal_lahir', $request->tanggal_lahir)->first();

        if(!$check){
            Alert::error('Gagal!', 'Anda tidak bisa registrasi dikarenakan bukan alumni dari SMK Al-Madani Pontianak!');

            return redirect(RouteServiceProvider::REGISTER);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $data_alumni = DataAlumni::create([
            'user_id' => $user->id,
            'nama_alumni' => $check->nama_lengkap,
            'nisn' => $check->nisn,
            'nis' => $check->nis,
            'tanggal_lahir' => $check->tanggal_lahir,
            'tempat_lahir' => $check->tempat_lahir,
            'jurusan' => $check->jurusan,
            'tahun_lulus' => $check->tahun_lulus,
        ]);

        event(new Registered($user));

        // Auth::login($user);

        Alert::success('Berhasil Registrasi Akun!', 'Silahkan masuk!');

        return redirect(RouteServiceProvider::LOGIN);
    }
}
