<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', [MainController::class, 'contact'])->name('contact');
Route::get('about', [MainController::class, 'about'])->name('about');
Route::post('contact', [MainController::class, 'contactPost'])->name('contact.post');
Route::get('privacy', [MainController::class, 'privacy'])->name('privacy');
Route::get('terms-and-conditions', [MainController::class, 'terms'])->name('terms');
Route::get('disclaimer', [MainController::class, 'disclaimer'])->name('disclaimer');
Route::get('our-company', [MainController::class, 'company'])->name('company');
Route::get('management', [MainController::class, 'management'])->name('management');
Route::get('quality', [MainController::class, 'quality'])->name('quality');
Route::get('manufacturing', [MainController::class, 'manufacturing'])->name('manufacturing');
Route::get('environment', [MainController::class, 'environment'])->name('environment');
Route::get('our-initiatives', [MainController::class, 'initiatives'])->name('initiatives');
Route::get('product', [MainController::class, 'product'])->name('product');
Route::get('our-brand', [MainController::class, 'ourBrand'])->name('our.brand');
Route::get('media-gallery', [MainController::class, 'gallery'])->name('gallery');
Route::get('partnership', [MainController::class, 'partnership'])->name('partnership');
Route::post('partnership', [MainController::class, 'partnershipStore'])->name('partnership.store');
Route::get('blogs', [MainController::class, 'blog'])->name('blog');
Route::get('press-release', [MainController::class, 'press'])->name('press');
Route::get('careers', [MainController::class, 'careers'])->name('careers');
Route::get('research-development', [MainController::class, 'researchDevelopment'])->name('research.development');
Route::get('ipr', [MainController::class, 'ipr'])->name('ipr');
Route::get('analytical-research-development', [MainController::class, 'analyticalResearchDevelopment'])->name('analytical.research.development');
Route::get('active-pharmaceutical-ingredients', [MainController::class, 'activePharmaceuticalIngredients'])->name('active.pharmaceutical.ingredients');
Route::get('formulation-research-development', [MainController::class, 'formulationResearchDevelopment'])->name('formulation.research.development');
Route::get('blog/{slug}', [MainController::class, 'blogDetail'])->name('blog.detail');
Route::get('press-release/{slug}', [MainController::class, 'pressDetail'])->name('press.detail');
Auth::routes();

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('contacts', [HomeController::class, 'contacts'])->name('admin.contacts');
    Route::get('partnership', [HomeController::class, 'partnership'])->name('admin.partnership');
    Route::get('blogs', [HomeController::class, 'blogs'])->name('admin.blogs');
    Route::get('press-release', [HomeController::class, 'press'])->name('admin.press');
    Route::get('gallery', [HomeController::class, 'gallery'])->name('admin.gallery');
    Route::get('careers', [HomeController::class, 'careers'])->name('admin.careers');
    Route::get('blog/create', [HomeController::class, 'blogCreate'])->name('admin.blog.create');
    Route::get('press-release/create', [HomeController::class, 'pressCreate'])->name('admin.press.create');
    Route::get('gallery/create', [HomeController::class, 'galleryCreate'])->name('admin.gallery.create');
    Route::get('careers/create', [HomeController::class, 'careerCreate'])->name('admin.careers.create');
    Route::post('blog/store', [HomeController::class, 'blogStore'])->name('admin.blog.create.post');
    Route::post('press-release/store', [HomeController::class, 'pressStore'])->name('admin.press.create.post');
    Route::post('gallery/store', [HomeController::class, 'galleryStore'])->name('admin.gallery.create.post');
    Route::post('careers/store', [HomeController::class, 'careerStore'])->name('admin.careers.create.post');
    Route::get('blog/edit/{id}', [HomeController::class, 'blogEdit'])->name('admin.blog.edit');
    Route::get('press-release/edit/{id}', [HomeController::class, 'pressEdit'])->name('admin.press.edit');
    Route::get('gallery/edit/{id}', [HomeController::class, 'galleryEdit'])->name('admin.gallery.edit');
    Route::get('careers/edit/{id}', [HomeController::class, 'careerEdit'])->name('admin.careers.edit');
    Route::post('blog/update/{id}', [HomeController::class, 'blogUpdate'])->name('admin.blog.update');
    Route::post('press-release/update/{id}', [HomeController::class, 'pressUpdate'])->name('admin.press.update');
    Route::post('gallery/update/{id}', [HomeController::class, 'galleryUpdate'])->name('admin.gallery.update');
    Route::post('careers/update/{id}', [HomeController::class, 'careerUpdate'])->name('admin.careers.update');
    Route::get('blog/delete/{id}', [HomeController::class, 'blogDelete'])->name('admin.blog.delete');
    Route::get('press-release/delete/{id}', [HomeController::class, 'pressDelete'])->name('admin.press.delete');
    Route::get('gallery/delete/{id}', [HomeController::class, 'galleryDelete'])->name('admin.gallery.delete');
    Route::get('careers/delete/{id}', [HomeController::class, 'careerDelete'])->name('admin.careers.delete');
    Route::get('partnership/delete/{id}', [HomeController::class, 'partnershipDelete'])->name('admin.partnership.delete');
});
