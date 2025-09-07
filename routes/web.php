<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\TeknisiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\BeritaAcaraController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProses'])->name('loginProses');

Route::get('loginKaryawan', [AuthController::class, 'loginKaryawan'])->name('loginKaryawan');
Route::post('loginKaryawan', [AuthController::class, 'loginKaryawanProses'])->name('loginKaryawanProses');

Route::get('pilihrole', [AuthController::class, 'pilihrole'])->name('pilihrole');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Routes with Middleware (Login Required)
|--------------------------------------------------------------------------
*/
Route::middleware('checkLogin')->group(function () {

    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // route karyawan
    Route::get('pengajuan', [KaryawanController::class, 'index'])->name('pengajuan.index');

    /*
    |--------------------------------------------------------------------------
    | Device Routes
    |--------------------------------------------------------------------------
    */
    Route::prefix('device')->group(function () {
        Route::get('/', [DeviceController::class, 'device'])->name('device');
        Route::get('/create', [DeviceController::class, 'createDevice'])->name('createDevice');
        Route::post('/store', [DeviceController::class, 'store'])->name('storeDevice');
        Route::get('/edit/{id}', [DeviceController::class, 'edit'])->name('editDevice');
        Route::post('/update/{id}', [DeviceController::class, 'update'])->name('updateDevice');
        Route::delete('/destroy/{id}', [DeviceController::class, 'destroy'])->name('deleteDevice');
        Route::get('/excel', [DeviceController::class, 'excel'])->name('deviceExcel');
        Route::get('/pdf', [DeviceController::class, 'pdf'])->name('devicePdf');
    });

    /*
    |--------------------------------------------------------------------------
    | Berita Acara Routes
    |--------------------------------------------------------------------------
    */
    Route::prefix('berita-acara')->group(function () {
        Route::resource('berita-acara', BeritaAcaraController::class);
        Route::get('/', [BeritaAcaraController::class, 'beritaAcara'])->name('beritaAcara');
        Route::get('/create', [BeritaAcaraController::class, 'createBa'])->name('createBa');
        Route::post('/store', [BeritaAcaraController::class, 'store'])->name('storeBa');
        Route::get('/edit/{id}', [BeritaAcaraController::class, 'edit'])->name('editBa');
        Route::put('/update/{id}', [BeritaAcaraController::class, 'update'])->name('updateBa');
        Route::delete('/destroy/{id}', [BeritaAcaraController::class, 'destroy'])->name('deleteBa');
        Route::get('/excel', [BeritaAcaraController::class, 'excel'])->name('beritaAcaraExcel');
        Route::get('/pdf', [BeritaAcaraController::class, 'pdf'])->name('beritaAcaraPdf');
    });

    /*
    |--------------------------------------------------------------------------
    | Pengajuan Routes
    |--------------------------------------------------------------------------
    */
    Route::prefix('pengajuan')->group(function () {
        Route::get('/', [KaryawanController::class, 'index'])->name('pengajuan.index');
        Route::post('/', [KaryawanController::class, 'store'])->name('pengajuan.store');
        Route::get('/status', [KaryawanController::class, 'status'])->name('status.pengajuan');
        Route::get('/daftar', [KaryawanController::class, 'daftarPengajuan'])->name('daftarPengajuan');
        Route::get('/all', [PengajuanController::class, 'daftar'])->name('pengajuan.daftar');
    });

    Route::prefix('teknisi')->group(function () {
        Route::get('/dashboard', [TeknisiController::class, 'pengajuanBaru'])->name('teknisi.dashboard');
        Route::get('/pengajuan', [TeknisiController::class, 'daftarPengajuan'])->name('teknisi.pengajuan');
        Route::post('/pengajuan/{id}/update-status', [TeknisiController::class, 'updateStatus'])->name('teknisi.updateStatus');
    });

});
