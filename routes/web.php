<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BeritaAcaraController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');



//login
Route::get('login',[AuthController::class,'login'])->name('login');
Route::post('login',[AuthController::class,'loginProses'])->name('loginProses');

Route::middleware('checkLogin')->group(function(){
    //dashboard
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

    //user
    Route::get('device',[DeviceController::class,'device'])->name('device');

    //bar
    Route::get('beritaAcara',[BeritaAcaraController::class,'beritaAcara'])->name('beritaAcara');
});

