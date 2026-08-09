<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/admin', function () {
    return view('admin/dashboard');
});


// ini buat controller

Route::resource('gallery', GalleryController::class)->names('galleries');

Route::resource('/admin/gallery', GalleryController::class)->names('galleries-admin');

