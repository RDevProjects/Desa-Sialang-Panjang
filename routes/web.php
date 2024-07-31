<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/tentang-desa', function () {
    return view('users.tentang');
})->name('tentangDesa');


Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('dashboard.home');

    Route::get('/blog', function () {
        return view('admin.blog.index');
    })->name('dashboard.blog');
});
