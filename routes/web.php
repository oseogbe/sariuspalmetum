<?php

use App\Http\Controllers\PalmController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/founder', function () {
    return view('founder');
})->name('founder');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/palms', [PalmController::class, 'index'])->name('palms.index');
