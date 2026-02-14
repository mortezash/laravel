<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('blog', \App\Http\Controllers\BlogController::class);
Route::get('send-mail', [\App\Http\Controllers\EmailController::class, 'send'])->name('send-mail');
