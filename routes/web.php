<?php


use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;



Route::controller(FrontendController::class)->name('frontend.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about','about')->name('about');
    Route::get('/category/{slug}', 'categoryArchive')->name('category.archeive');
    Route::get('/contact-us', 'contact')->name('contact');
    
});




