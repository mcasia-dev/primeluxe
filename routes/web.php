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
        Route::get('/about', 'about')->name('about');
        Route::get('/contact', 'contact')->name('contact');
    });

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/aboutus', function () {
//     return view('aboutus');
// })->name('aboutus');

// Route::get('/careers', function () {
//     return view('careers');
// })->name('careers');

// Route::get('/news', function () {
//     return view('news');
// })->name('news');

// Route::get('/brand_1', function () {
//     return view('brands.brand_1');
// })->name('brand_1');

// Route::get('/brand_2', function () {
//     return view('brands.brand_2');
// })->name('brand_2');

// Route::get('/showroom_1', function () {
//     return view('showroom.showroom_1');
// })->name('showroom_1');

// Route::get('/showroom_2', function () {
//     return view('showroom.showroom_2');
// })->name('showroom_2');

// Route::get('/news_1', function () {
//     return view('news.news_1');
// })->name('news_1');

// Route::get('/news_2', function () {
//     return view('news.news_2');
// })->name('news_2');

// Route::get('/news_3', function () {
//     return view('news.news_3');
// })->name('news_3');

// Route::get('/contactus', function () {
//     return view('contactus');
// })->name('contactus');

// Route::get('/home_test', function () {
//     return view('home_test');
// })->name('home_test');
