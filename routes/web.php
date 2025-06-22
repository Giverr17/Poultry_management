<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('page.about');
})->name('about');

Route::get('/contact', function () {
    return view('page.contact');
})->name('contact');

Route::get('/services', function () {
    return view('page.service');
})->name('service');

Route::get('/history', function () {
    return view('page.history');
})->name('history');

Route::get('/team', function () {
    return view('page.team');
})->name('team');
