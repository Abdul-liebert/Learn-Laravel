<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/siswa', function () {
    return view('page.siswa');
});
Route::get('/guru', function () {
    return view('page.guru');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(KategoriController::class)->group(function () {
    Route::get('/kategori', 'index');
    Route::get('/kategori-create', 'create')->name('kategori.create');
    Route::post('/kategori', 'store')->name('kategori.store');
    Route::get('/kategori/{id}', 'edit')->name('kategori.edit');
    Route::put('/kategori/{id}', 'update')->name('kategori.update');
    Route::delete('/kategori/{id}', 'destroy')->name('kategori.delete');
});
