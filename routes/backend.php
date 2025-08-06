<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;




Auth::routes();


Route::prefix('backend/')->name('backend.')->middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



    //* Categories
    Route::controller(CategoryController::class)->name('category.')->prefix('category')->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/status-update/{id}','statusUpdate')->name('update.status');
    });
    //* Products
    Route::controller(ProductController::class)->name('product.')->prefix('product')->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/status-update/{id}','statusUpdate')->name('update.status');
    });




});
