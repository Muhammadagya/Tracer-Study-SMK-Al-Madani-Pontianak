<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataAlumniController;
use App\Http\Controllers\DataBelumController;
use App\Http\Controllers\DataKuliahController;
use App\Http\Controllers\DataKusionerController;
use App\Http\Controllers\DataPekerjaanController;
use App\Http\Controllers\DataWirausahaController;
use App\Models\DataAlumni;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('menu-content.home-menu', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('menu-content.about-menu', [
        "title" => "About"
    ]);
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

// NITIP
// Route::get('/data-pribadi', function () {
//     return view('dashboard-alumni.pengisian-data-pribadi');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/pengisian-kusioner', function () {
//     return view('dashboard-alumni.pengisian-kusioner');
// })->middleware(['auth', 'verified']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 
Route::middleware('auth')->group(function () {
    // identitas alumni
    Route::get('/identitas', [DataAlumniController::class, 'edit'])->name('dashboard.identitas');
    Route::post('/identitas', [DataAlumniController::class, 'update']);

    // informasi pekerjaan alumni
    // Route::get('/identitas/bekerja', [DataPekerjaanController::class, 'edit'])->name('dashboard.identitas.bekerja');
    Route::get('/identitas/edit', [DataPekerjaanController::class, 'edit'])->name('dashboard.identitas.editbekerja');
    Route::get('/identitas/bekerja', [DataPekerjaanController::class, 'ambil'])->name('dashboard.identitas.bekerja');
    Route::post('/identitas/bekerja', [DataPekerjaanController::class, 'update']);

    // informasi kuliah alumni
    Route::get('/identitas/kuliah', [DataKuliahController::class, 'edit'])->name('dashboard.identitas.kuliah');
    Route::post('/identitas/kuliah', [DataKuliahController::class, 'update']);

    // informasi alumni wirausaha
    Route::get('/identitas/wirausaha', [DataWirausahaController::class, 'edit'])->name('dashboard.identitas.wirausaha');
    Route::post('/identitas/wirausaha', [DataWirausahaController::class, 'update']);

    // informasi alumni yang belum kerja atau kuliah
    Route::get('/identitas/belum-kerja-atau-kuliah', [DataBelumController::class, 'edit'])->name('dashboard.identitas.belum');
    Route::post('/identitas/belum-kerja-atau-kuliah', [DataBelumController::class, 'update']);

    // pengisian kusioner
    Route::get('/kusioner', [DataKusionerController::class, 'edit'])->name('dashboard.kusioner');
    Route::post('/kusioner', [DataKusionerController::class, 'update']);
});

require __DIR__.'/auth.php';
