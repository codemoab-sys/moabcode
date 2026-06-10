<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Informational pages
Route::view('/terminos', 'pages.terms')->name('terms');
Route::view('/privacidad', 'pages.privacy')->name('privacy');
Route::view('/contactanos', 'pages.contact')->name('contact');
Route::view('/nosotros', 'pages.nosotros')->name('nosotros');
