<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/tentang-desa', function () {
    return view('users.tentang');
})->name('tentangDesa');
