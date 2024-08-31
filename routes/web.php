<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UmurController;

use App\Http\Middleware\CheckUmur;

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/pages', function () {
    return view('pages.index');
})->name('index');

Route::get('/profil', function () {
    return view('pages.profile');
});

//  untuk handle halaman menuju 404
Route::fallback(function(){
    return "halaman 404 | Not Found" ;
});

// routing menggunakan resource
Route::resource('profile', ProfileController::class);

// mengalihkan beberapa method
Route::match(['GET', 'POST'], 'jangandibuka', function(){
    return redirect ('/');
});


// middleware
// Route::get('cek_umur_saya', function(){
//     return view('umur.cekUmur');
// });

Route::get('cek_umur_saya', [UmurController::class, 'showForm']);
Route::post('cek_proses', [UmurController::class, 'cekProses'])->name('proses');

Route::get('home', function(){
    return "kamu sudah cukup umur";
})->middleware(CheckUmur::class);


// controller
Route::get('karyawan',[KaryawanController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
