<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

    Route::get('/blog', [BlogController::class, 'index'])->name('dashboard.blog');
    Route::get('/blog/tambah', [BlogController::class, 'create'])->name('dashboard.blog.tambah');
    Route::post('/blog/tambah', [BlogController::class, 'store'])->name('dashboard.blog.store');
    Route::get('/blog/edit/{slug}', [BlogController::class, 'edit'])->name('dashboard.blog.edit');
    Route::put('/blog/edit/{slug}', [BlogController::class, 'update'])->name('dashboard.blog.update');
    Route::delete('/blog/delete/{slug}', [BlogController::class, 'destroy'])->name('dashboard.blog.delete');
    Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('dashboard.blog.show');
});
