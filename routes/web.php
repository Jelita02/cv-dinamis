<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// menambahkan route biodata
Route::resource('/biodata', App\Http\Controllers\BiodataController::class);

 // menambahkan route education 
Route::resource('/education', App\Http\Controllers\EducationController::class);
// menambahkan route untuk show cv
Route::get('/CV', [App\Http\Controllers\CVController::class, 'show'])->name('cv.show');