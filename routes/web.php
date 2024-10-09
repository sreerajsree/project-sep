<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', [MainController::class, 'contact'])->name('contact');
Route::post('contact', [MainController::class, 'contactPost'])->name('contact.post');
Route::get('privacy', [MainController::class, 'privacy'])->name('privacy');
Route::get('terms-and-conditions', [MainController::class, 'terms'])->name('terms');
Route::get('disclaimer', [MainController::class, 'disclaimer'])->name('disclaimer');
Route::get('our-company', [MainController::class, 'company'])->name('company');
Route::get('management', [MainController::class, 'management'])->name('management');
Route::get('quality', [MainController::class, 'quality'])->name('quality');
Route::get('media-gallery', [MainController::class, 'gallery'])->name('gallery');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

