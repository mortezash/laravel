<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/create', [\App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');
Route::post('/blog', [\App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
