<?php

use App\Http\Controllers\admin\DashboardAdminController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\HRD\DashboardHRDController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\SubKriteriaController;
use Illuminate\Support\Facades\Route;




// admin
Route::get('/admin/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard_admin');

// HRD
Route::get('/HRD/dashboard', [DashboardHRDController::class, 'index'])->name('dashboard_HRD');

// kriteria
Route::get('/kriteria', [KriteriaController::class, 'kriteria'])->name('kriteria');
Route::get('/subkriteria/{id}', [SubKriteriaController::class, 'subkriteria'])->name('subkriteria');

// Alternatif
Route::get('/alternatif', [AlternatifController::class, 'index'])->name('alternatif');
