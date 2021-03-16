<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Homepage
Route::get('/', function () {
    return view('pages.home');
});

// Services
Route::get('/services', function() {
    return view('pages.services');
});

// Our Team
Route::get('/our-team', function() {
    return view('pages.our-team');
});

// Contact Form
Route::get('/contact', function() {
    return view('pages.contact');
});
