<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [InventarisController::class, 'index'])->name('home');
Route::get('/tambah', [InventarisController::class, 'tambah']);
Route::post('/simpan', [InventarisController::class, 'simpan']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
