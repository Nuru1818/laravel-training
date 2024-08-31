<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

