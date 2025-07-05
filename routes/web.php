<?php

use App\Http\Controllers\Bird_Register_Controller;
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
Route::get('/admin', function () {
    return view('admin.admin');
})->name('admin');
Route::get('/health-report', function () {
    return view('admin.health-report');
})->name('report');

Route::get('register',[Bird_Register_Controller::class,'register'])->name('register');
