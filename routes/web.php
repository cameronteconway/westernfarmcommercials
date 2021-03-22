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

    $meta = [];
    $meta['meta_title'] = "Western Farm Commercials homepage";
    $meta['meta_keywords'] = "western, farm, commercials, fleet maintenance, LGV mechanics, LGV, workshop, services";
    $meta['meta_description'] = "Western Farm Commercials is a fledging company with strong aspirations and over 100 years of combined experience.";

    return view('pages.home')->with("meta", $meta);
});

// About
Route::get('/about', function () {

    $meta = [];
    $meta['meta_title'] = "About Western Farm Commercials";
    $meta['meta_keywords'] = "western, farm, commercials, LGV, services, fleet maintenance, MOT, trailers, commercial vehicles, tractors, brake rolling, recovery";
    $meta['meta_description'] = "";

    return view('pages.about')->with("meta", $meta);
});

// Services
Route::get('/services', function() {

    $meta = [];
    $meta['meta_title'] = "Services provided by Western Farm Commercials";
    $meta['meta_keywords'] = "western, farm, commercials, LGV, services, fleet maintenance, MOT, trailers, commercial vehicles, tractors, brake rolling, recovery";
    $meta['meta_description'] = "Western Farm Commercials is qualified to provide a range of services for Class IV and VII Vehicles";

    return view('pages.services')->with("meta", $meta);
});

// Our Team
Route::get('/our-team', function() {

    $meta = [];
    $meta['meta_title'] = "About the team at Western Farm Commercials";
    $meta['meta_keywords'] = "western, farm, commercials, LGV, services, fleet maintenance, MOT, trailers, commercial vehicles, tractors, brake rolling, recovery, team";
    $meta['meta_description'] = "All our team are highly qualified and extremely capable, boasting over 100 years’ experience they are passionate about their work.";

    return view('pages.our-team')->with("meta", $meta);
});

// Contact Form
Route::get('/contact', function() {

    $meta = [];
    $meta['meta_title'] = "Contact Western Farm Commercials";
    $meta['meta_keywords'] = "western, farm, commercials, LGV, services, fleet maintenance, MOT, trailers, commercial vehicles, tractors, brake rolling, recovery";
    $meta['meta_description'] = "Contact Western Farm Commericals - a fledging company with strong aspirations and over 100 years of combined experience";

    return view('pages.contact')->with("meta", $meta);
});
