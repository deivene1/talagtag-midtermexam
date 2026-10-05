<?php

use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', function () {
    return view('home');
});

// About Route
Route::get('/about', function () {
    return view('about');
});

// Services Route
Route::get('/services', function () {
    return view('services');
});

// Contact Route
Route::get('/contact', function () {
    return view('contact');
});