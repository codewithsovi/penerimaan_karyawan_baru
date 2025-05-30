<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SawController;
use App\Http\Controllers\KriteriaController;

use App\Http\Controllers\Sesi\SesiController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\SubKriteriaController;
use App\Http\Controllers\pelamar\HasilController;
use App\Http\Controllers\HRD\DataPelamarController;
use App\Http\Controllers\Pelamar\PelamarController;
use App\Http\Controllers\HRD\DashboardHRDController;
use App\Http\Controllers\admin\ManajemenAkunController;
use App\Http\Controllers\admin\DashboardAdminController;
use App\Http\Controllers\HasilSeleksiController;

Route::get('/', function () { return view('index');})->name('halaman_utama');

// admin
Route::get('/admin/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard_admin');
// manajemen akun
Route::get('/admin/ManajemenAkun', [ManajemenAkunController::class, 'index'])->name('manajemen_akun');
Route::post('/admin/CreateAkun', [ManajemenAkunController::class, 'store'])->name('manajemen_akun.store');
Route::put('/admin/UpdateAkun/{id}', [ManajemenAkunController::class, 'update'])->name('manajemen_akun.update');
Route::delete('/admin/DeleteAkun/{id}', [ManajemenAkunController::class, 'destroy'])->name('manajemen_akun.destroy');

// HRD
Route::get('/HRD/dashboard', [DashboardHRDController::class, 'index'])->name('dashboard_HRD');
// data pelamar
Route::get('/HRD/datapelamar', [DataPelamarController::class, 'index'])->name('data_pelamar');
Route::post('/HRD/CreatePelamar', [DataPelamarController::class, 'store'])->name('pelamar.store');
Route::put('/HRD/UpdatePelamar/{id}', [DataPelamarController::class, 'update'])->name('pelamar.update');
Route::delete('/HRD/DeletePelamar/{id}', [DataPelamarController::class, 'destroy'])->name('pelamar.destroy');

//Pelamar
Route::get('/pelamar', [PelamarController::class, 'index'])->name('beranda.pelamar');
//hasil
// Route::prefix('pelamar')->middleware(['auth'])->group(function () {
    Route::get('/hasil', [HasilController::class, 'index'])->name('hasil.pelamar');
// });

// kriteria
Route::get('/kriteria', [KriteriaController::class, 'kriteria'])->name('kriteria');
Route::get('/subkriteria/{id}', [SubKriteriaController::class, 'subkriteria'])->name('subkriteria');

// Alternatif
Route::get('/alternatif', [AlternatifController::class, 'index'])->name('alternatif');
Route::post('/alternatif/store', [AlternatifController::class, 'store'])->name('alternatif.store');
Route::put('/alternatifUpdate/{user}', [AlternatifController::class, 'update'])->name('alternatif.update');
Route::delete('/alternatifDelete/{user}', [AlternatifController::class, 'destroy'])->name('alternatif.destroy');

// SAW
Route::get('/SAW', [SawController::class, 'index'])->name('saw.index');
Route::get('/hasil_seleksi', [HasilSeleksiController::class, 'index'])->name('hasil_seleksi');
Route::post('/validasi-seleksi/{userId}', [SawController::class, 'validasiSeleksi'])->name('validasi.seleksi');

Route::post('/seleksi/proses', [HasilSeleksiController::class, 'prosesSeleksi'])->name('seleksi.proses');

//Auth
Route::get('/login', [SesiController::class, 'toLogin'])->name('login');
Route::post('/proses-login', [SesiController::class, 'prosesLogin'])->name('proses.login');
Route::post('/logout', [SesiController::class, 'logout'])->name('logout');
