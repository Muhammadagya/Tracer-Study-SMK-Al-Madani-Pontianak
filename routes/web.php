<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataAlumniController;

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

Route::get('/data-pribadi', function () {
    return view('dashboard-alumni.pengisian-data-pribadi');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pengisian-kusioner', function () {
    return view('dashboard-alumni.pengisian-kusioner');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 
Route::controller(App\Http\Controllers\DataAlumniController::class)->group(function () {
    Route::get('/data-pribadi', 'create');
    Route::post('/data-pribadi', 'store');
})->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
