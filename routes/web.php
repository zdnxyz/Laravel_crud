<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// tambah dibawah ini
Route::resource('produk', App\Http\Controllers\ProdukController::class)->middleware('auth');
Route::resource('merek', App\Http\Controllers\MerekController::class)->middleware('auth');
Route::resource('barang', App\Http\Controllers\BarangController::class)->middleware('auth');