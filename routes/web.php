<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController\HomeController;
use App\Http\Controllers\FrontendController\PageController;

/**
 *    Frontend Routes - Cynix Inc Personalized Restaurant Template
 */

// Main Homepage Route (/)
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'indexTwo')->name('home');
});

// Essential Pages Route
Route::controller(PageController::class)->group(function () {
    Route::get('menu-pizza', 'menuPizza')->name('menuPizza');
    Route::get('about', 'about')->name('about');
    Route::get('gallery', 'gallery')->name('gallery');
    Route::get('contact', 'contact')->name('contact');
});
