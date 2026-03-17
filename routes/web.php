<?php

use App\Http\Controllers\PublicPageController;
use Illuminate\Support\Facades\Route;

Route::controller(PublicPageController::class)
    ->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/solutions', 'solutions')->name('solutions');
        Route::get('/systems', 'systems')->name('systems');
        Route::get('/materials', 'materials')->name('materials');
        Route::get('/collections', 'collections')->name('collections');
        Route::get('/process', 'process')->name('process');
        Route::get('/products', 'products')->name('products');
        Route::get('/about', 'about')->name('about');
        Route::get('/contact', 'contact')->name('contact');
    });
