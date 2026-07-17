<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/about', function () {
    return view('about');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/contact', function () {
    return view('contact');
});

