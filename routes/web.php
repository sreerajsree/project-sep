<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', [MainController::class, 'contact'])->name('contact');
Route::post('contact', [MainController::class, 'contactPost'])->name('contact.post');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
