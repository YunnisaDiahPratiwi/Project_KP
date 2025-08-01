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

//logout
Route::post('logout',[AuthController::class,'logout'])->name('logout');


Route::middleware('checkLogin')->group(function(){
    //dashboard
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

    //device
    Route::get('device',[DeviceController::class,'device'])->name('device');
    Route::get('device/createDevice',[DeviceController::class,'createDevice'])->name('createDevice');
    Route::post('device/store',[DeviceController::class,'store'])->name('storeDevice');
    Route::get('device/edit/{id}',[DeviceController::class,'edit'])->name('editDevice');
    Route::post('device/update/{id}',[DeviceController::class,'update'])->name('updateDevice');
    Route::delete('device/destroy/{id}',[DeviceController::class,'destroy'])->name('deleteDevice');
    Route::get('device/excel',[DeviceController::class,'excel'])->name('deviceExcel');
    Route::get('device/pdf',[DeviceController::class,'pdf'])->name('devicePdf');

    //berita acara
    Route::get('beritaAcara',[BeritaAcaraController::class,'beritaAcara'])->name('beritaAcara');
    Route::resource('berita-acara', BeritaAcaraController::class)->middleware('checkLogin'); // Assuming you want to use resource routes for CRUD operations on BeritaAcara
    Route::get('beritaAcara/createBa',[BeritaAcaraController::class,'createBa'])->name('createBa');
    Route::post('beritaAcara/store',[BeritaAcaraController::class,'store'])->name('storeBa');

});
