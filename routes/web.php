<?php

use App\Http\Controllers\admin\DashboardAdminController;
use App\Http\Controllers\admin\ManajemenAkunController;
use App\Http\Controllers\AlternatifController;

use App\Http\Controllers\HRD\DashboardHRDController;
use App\Http\Controllers\HRD\DataPelamarController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\Sesi\SesiController;
use App\Http\Controllers\SubKriteriaController;
use Illuminate\Support\Facades\Route;

// admin
Route::get('/admin/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard_admin');
Route::get('/admin/ManajemenAkun', [ManajemenAkunController::class, 'index'])->name('manajemen_akun');
Route::post('/admin/CreateAkun', [ManajemenAkunController::class, 'store'])->name('manajemen_akun.store');
Route::put('/admin/UpdateAkun/{id}', [ManajemenAkunController::class, 'update'])->name('manajemen_akun.update');
Route::delete('/admin/DeleteAkun/{id}', [ManajemenAkunController::class, 'destroy'])->name('manajemen_akun.destroy');

// HRD
Route::get('/HRD/dashboard', [DashboardHRDController::class, 'index'])->name('dashboard_HRD');
Route::get('/HRD/datapelamar', [DataPelamarController::class, 'index'])->name('data_pelamar');
Route::post('/HRD/CreatePelamar', [DataPelamarController::class, 'store'])->name('pelamar.store');
Route::put('/HRD/UpdatePelamar/{id}', [DataPelamarController::class, 'update'])->name('pelamar.update');
Route::delete('/HRD/DeletePelamar/{id}', [DataPelamarController::class, 'destroy'])->name('pelamar.destroy');

// kriteria
Route::get('/kriteria', [KriteriaController::class, 'kriteria'])->name('kriteria');
Route::get('/subkriteria/{id}', [SubKriteriaController::class, 'subkriteria'])->name('subkriteria');

// Alternatif
Route::get('/alternatif', [AlternatifController::class, 'index'])->name('alternatif');

//Auth
Route::get('/', [SesiController::class, 'toLogin'])->name('login');
Route::post('/', [SesiController::class, 'prosesLogin'])->name('proses.login');
