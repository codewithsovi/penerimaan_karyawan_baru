<?php

use App\Http\Controllers\admin\DashboardAdminController;
use App\Http\Controllers\admin\ManajemenAkunController;
use App\Http\Controllers\AlternatifController;

use App\Http\Controllers\HRD\DashboardHRDController;
use App\Http\Controllers\HRD\DataPelamarController;
use App\Http\Controllers\Pelamar\DashboardPelamarController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\Sesi\SesiController;
use App\Http\Controllers\SubKriteriaController;
use Illuminate\Support\Facades\Route;



// ADMIN
Route::middleware(['isLogin'])->group(function () {

    Route::middleware(['userAkses:admin'])->group(function () {
        Route::get('/admin/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard_admin');
        // Manajemen Akun
        Route::get('/admin/ManajemenAkun', [ManajemenAkunController::class, 'index'])->name('manajemen_akun');
        Route::post('/admin/CreateAkun', [ManajemenAkunController::class, 'store'])->name('manajemen_akun.store');
        Route::put('/admin/UpdateAkun/{id}', [ManajemenAkunController::class, 'update'])->name('manajemen_akun.update');
        Route::delete('/admin/DeleteAkun/{id}', [ManajemenAkunController::class, 'destroy'])->name('manajemen_akun.destroy');
    });

    Route::middleware(['userAkses:hrd'])->group(function () {
        // HRD
        Route::get('/HRD/dashboard', [DashboardHRDController::class, 'index'])->name('dashboard_HRD');
        // data pelamar
        Route::get('/HRD/datapelamar', [DataPelamarController::class, 'index'])->name('data_pelamar');
        Route::post('/HRD/CreatePelamar', [DataPelamarController::class, 'store'])->name('pelamar.store');
        Route::put('/HRD/UpdatePelamar/{id}', [DataPelamarController::class, 'update'])->name('pelamar.update');
        Route::delete('/HRD/DeletePelamar/{id}', [DataPelamarController::class, 'destroy'])->name('pelamar.destroy');
    });

    Route::middleware(['userAkses:pelamar'])->group(function () {
        // Dashboard Pelamar
        Route::get('/pelamar/dashboard', [DashboardPelamarController::class, 'index'])->name('dashboard_pelamar');
        //hasil
        Route::prefix('pelamar')->middleware(['auth'])->group(function () {
            Route::get('/hasil', [HasilController::class, 'index'])->name('pelamar.hasil');
        });
    });


    // kriteria
    Route::get('/kriteria', [KriteriaController::class, 'kriteria'])->name('kriteria');
    Route::get('/subkriteria/{id}', [SubKriteriaController::class, 'subkriteria'])->name('subkriteria');

    // Alternatif
    Route::get('/alternatif', [AlternatifController::class, 'index'])->name('alternatif');
    Route::post('/alternatif/store', [AlternatifController::class, 'store'])->name('alternatif.store');
    Route::put('/alternatifUpdate/{user}', [AlternatifController::class, 'update'])->name('alternatif.update');
    Route::delete('/alternatifDelete/{user}', [AlternatifController::class, 'destroy'])->name('alternatif.destroy');


});
//Auth
Route::middleware(['sudahLogin'])->group(function () {
    Route::get('/', function () { return view('index');})->name('halaman_utama');
    Route::get('/login', [SesiController::class, 'toLogin'])->name('login');
});


Route::post('/proses-login', [SesiController::class, 'prosesLogin'])->name('proses.login');
Route::get('/logout', [SesiController::class, 'logout'])->name('logout');
