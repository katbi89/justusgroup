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

Route::get('/', function () {
    return view('welcome');
});


Route::get('contact-us/', function () {
    return view('contact-us');
});


Route::get('contact-us-ar/', function () {
    return view('contact-us-ar');
});


Route::get('about-us/', function () {
    return view('about-us');
});

Route::get('about-us-ar/', function () {
    return view('about-us-ar');
});

Route::get('projects/', function () {
    return view('projects');
});

Route::get('projects-ar/', function () {
    return view('projects-ar');
});

Route::get('welcome-ar/', function () {
    return view('welcome-ar');
});

Route::get('garden-chairs/', function () {
    return view('garden-chairs');
});

Route::get('garden-chairs-ar/', function () {
    return view('garden-chairs-ar');
});

Route::get('chairs/', function () {
    return view('chairs');
});

Route::get('chairs-ar/', function () {
    return view('chairs-ar');
});

Route::get('outdoor-living/', function () {
    return view('outdoor-living');
});

Route::get('outdoor-living-ar/', function () {
    return view('outdoor-living-ar');
});

Route::get('outdoor-living-ar/', function () {
    return view('outdoor-living-ar');
});

Route::get('outdoor-dining/', function () {
    return view('outdoor-dining');
});

Route::get('outdoor-dining-ar/', function () {
    return view('outdoor-dining-ar');
});

Route::get('tables/', function () {
    return view('tables');
});

Route::get('tables-ar/', function () {
    return view('tables-ar');
});

Route::get('swings/', function () {
    return view('swings');
});

Route::get('swings-ar/', function () {
    return view('swings-ar');
});