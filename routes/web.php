<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/b2c', function () {
    return view('b2c');
});

Route::get('/b2b', function () {
    return view('b2b');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/security', function () {
    return view('security');
});

Route::get('/about-us', function () {
    return view('about-us');
});


Route::get('/registration', function () {
    return view('registration');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/success', function () {
    return view('success');
});