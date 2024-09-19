<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', [MainController::class, 'contact'])->name('contact');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
