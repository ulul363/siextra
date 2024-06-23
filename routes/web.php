<?php

use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\KehadiranController;
use App\Http\Controllers\PembinaController;
use App\Http\Controllers\PrestasiEkstrakurikulerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramKegiatanController;
use App\Http\Controllers\JadwalEkstrakurikulerController;
use App\Http\Controllers\PrestasiSiswaController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Siswa
Route::get('siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('siswa/{siswa}', [SiswaController::class, 'show'])->name('siswa.show');
Route::get('siswa/{siswa}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::delete('siswa/{siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
Route::put('siswa/{siswa}', [SiswaController::class, 'update'])->name('siswa.update');


// Pembina
Route::get('pembina', [PembinaController::class, 'index'])->name('pembina.index');
Route::get('pembina/create', [PembinaController::class, 'create'])->name('pembina.create');
Route::post('pembina', [PembinaController::class, 'store'])->name('pembina.store');
Route::get('pembina/{pembina}', [PembinaController::class, 'show'])->name('pembina.show');
Route::get('pembina/{pembina}/edit', [PembinaController::class, 'edit'])->name('pembina.edit');
Route::delete('pembina/{pembina}', [PembinaController::class, 'destroy'])->name('pembina.destroy');
Route::put('pembina/{pembina}', [PembinaController::class, 'update'])->name('pembina.update');

// Ekstrakurikuler
Route::get('ekstrakurikuler', [EkstrakurikulerController::class, 'index'])->name('ekstrakurikuler.index');
Route::get('ekstrakurikuler/create', [EkstrakurikulerController::class, 'create'])->name('ekstrakurikuler.create');
Route::post('ekstrakurikuler', [EkstrakurikulerController::class, 'store'])->name('ekstrakurikuler.store');
Route::get('ekstrakurikuler/{ekstrakurikuler}', [EkstrakurikulerController::class, 'show'])->name('ekstrakurikuler.show');
Route::get('ekstrakurikuler/{ekstrakurikuler}/edit', [EkstrakurikulerController::class, 'edit'])->name('ekstrakurikuler.edit');
Route::delete('ekstrakurikuler/{ekstrakurikuler}', [EkstrakurikulerController::class, 'destroy'])->name('ekstrakurikuler.destroy');
Route::put('ekstrakurikuler/{ekstrakurikuler}', [EkstrakurikulerController::class, 'update'])->name('ekstrakurikuler.update');

// Kehadiran
Route::get('kehadiran', [KehadiranController::class, 'index'])->name('kehadiran.index');
Route::get('kehadiran/create', [KehadiranController::class, 'create'])->name('kehadiran.create');
Route::post('kehadiran', [KehadiranController::class, 'store'])->name('kehadiran.store');
Route::get('kehadiran/{kehadiran}', [KehadiranController::class, 'show'])->name('kehadiran.show');
Route::get('kehadiran/{kehadiran}/edit', [KehadiranController::class, 'edit'])->name('kehadiran.edit');
Route::put('kehadiran/{kehadiran}', [KehadiranController::class, 'update'])->name('kehadiran.update');
Route::delete('kehadiran/{kehadiran}', [KehadiranController::class, 'destroy'])->name('kehadiran.destroy');

// Jadwal Ekstrakurikuler
Route::get('jadwalekstrakurikuler', [JadwalEkstrakurikulerController::class, 'index'])->name('jadwalekstrakurikuler.index');
Route::get('jadwalekstrakurikuler/create', [JadwalEkstrakurikulerController::class, 'create'])->name('jadwalekstrakurikuler.create');
Route::post('jadwalekstrakurikuler', [JadwalEkstrakurikulerController::class, 'store'])->name('jadwalekstrakurikuler.store');
Route::get('jadwalekstrakurikuler/{id}', [JadwalEkstrakurikulerController::class, 'show'])->name('jadwalekstrakurikuler.show');
Route::get('jadwalekstrakurikuler/{id}/edit', [JadwalEkstrakurikulerController::class, 'edit'])->name('jadwalekstrakurikuler.edit');
Route::put('jadwalekstrakurikuler/{id}', [JadwalEkstrakurikulerController::class, 'update'])->name('jadwalekstrakurikuler.update');
Route::delete('jadwalekstrakurikuler/{id}', [JadwalEkstrakurikulerController::class, 'destroy'])->name('jadwalekstrakurikuler.destroy');

// Program Kegiatan
Route::get('programkegiatan', [ProgramKegiatanController::class, 'index'])->name('programkegiatan.index');
Route::get('programkegiatan/create', [ProgramKegiatanController::class, 'create'])->name('programkegiatan.create');
Route::post('programkegiatan', [ProgramKegiatanController::class, 'store'])->name('programkegiatan.store');
Route::get('programkegiatan/{programkegiatan}', [ProgramKegiatanController::class, 'show'])->name('programkegiatan.show');
Route::get('programkegiatan/{programkegiatan}/edit', [ProgramKegiatanController::class, 'edit'])->name('programkegiatan.edit');
Route::put('programkegiatan/{programkegiatan}', [ProgramKegiatanController::class, 'update'])->name('programkegiatan.update'); // Menggunakan PUT untuk update
Route::delete('programkegiatan/{programkegiatan}', [ProgramKegiatanController::class, 'destroy'])->name('programkegiatan.destroy');

// Rute untuk PrestasiEkstrakurikuler
Route::get('prestasiekstrakurikuler', [PrestasiEkstrakurikulerController::class, 'index'])->name('prestasiekstrakurikuler.index');
Route::get('prestasiekstrakurikuler/create', [PrestasiEkstrakurikulerController::class, 'create'])->name('prestasiekstrakurikuler.create');
Route::post('prestasiekstrakurikuler', [PrestasiEkstrakurikulerController::class, 'store'])->name('prestasiekstrakurikuler.store');
Route::get('prestasiekstrakurikuler/{prestasiekstrakurikuler}', [PrestasiEkstrakurikulerController::class, 'show'])->name('prestasiekstrakurikuler.show');
Route::get('prestasiekstrakurikuler/{prestasiekstrakurikuler}/edit', [PrestasiEkstrakurikulerController::class, 'edit'])->name('prestasiekstrakurikuler.edit');
Route::put('prestasiekstrakurikuler/{prestasiekstrakurikuler}', [PrestasiEkstrakurikulerController::class, 'update'])->name('prestasiekstrakurikuler.update');
Route::delete('prestasiekstrakurikuler/{prestasiekstrakurikuler}', [PrestasiEkstrakurikulerController::class, 'destroy'])->name('prestasiekstrakurikuler.destroy');

// PrestasiSiswa
Route::get('prestasisiswa', [PrestasiSiswaController::class, 'index'])->name('prestasisiswa.index');
Route::get('prestasisiswa/create', [PrestasiSiswaController::class, 'create'])->name('prestasisiswa.create');
Route::post('prestasisiswa', [PrestasiSiswaController::class, 'store'])->name('prestasisiswa.store');
Route::get('prestasisiswa/{prestasisiswa}', [PrestasiSiswaController::class, 'show'])->name('prestasisiswa.show');
Route::get('prestasisiswa/{prestasisiswa}/edit', [PrestasiSiswaController::class, 'edit'])->name('prestasisiswa.edit');
Route::delete('prestasisiswa/{prestasisiswa}', [PrestasiSiswaController::class, 'destroy'])->name('prestasisiswa.destroy');
Route::put('prestasisiswa/{prestasisiswa}', [PrestasiSiswaController::class, 'update'])->name('prestasisiswa.update');

// Chat


// pengajuan pertemuan

require __DIR__ . '/auth.php';
