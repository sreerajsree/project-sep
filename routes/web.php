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
Route::get('blogs', [MainController::class, 'blog'])->name('blog');
Route::get('careers', [MainController::class, 'careers'])->name('careers');
Route::get('research-development', [MainController::class, 'researchDevelopment'])->name('research.development');
Route::get('ipr', [MainController::class, 'ipr'])->name('ipr');
Route::get('analytical-research-development', [MainController::class, 'analyticalResearchDevelopment'])->name('analytical.research.development');
Route::get('active-pharmaceutical-ingredients', [MainController::class, 'activePharmaceuticalIngredients'])->name('active.pharmaceutical.ingredients');
Route::get('formulation-research-development', [MainController::class, 'formulationResearchDevelopment'])->name('formulation.research.development');
Route::get('blog/{slug}', [MainController::class, 'blogDetail'])->name('blog.detail');
Auth::routes();

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('contacts', [HomeController::class, 'contacts'])->name('admin.contacts');
    Route::get('blogs', [HomeController::class, 'blogs'])->name('admin.blogs');
    Route::get('blog/create', [HomeController::class, 'blogCreate'])->name('admin.blog.create');
    Route::post('blog/store', [HomeController::class, 'blogStore'])->name('admin.blog.create.post');
    Route::get('blog/edit/{id}', [HomeController::class, 'blogEdit'])->name('admin.blog.edit');
    Route::post('blog/update/{id}', [HomeController::class, 'blogUpdate'])->name('admin.blog.update');
    Route::get('blog/delete/{id}', [HomeController::class, 'blogDelete'])->name('admin.blog.delete');
});
