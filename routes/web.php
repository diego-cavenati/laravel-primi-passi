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
    $title_page = 'Benvenuti nella homepage';
    return view('welcome', compact('title_page'));
})->name('home');

Route::get('/contacts', function () {
    $title_page = 'Benvenuti nei contatti';
    return view('welcome', compact('title_page'));
})->name('contacts');

Route::get('/shop', function () {
    $title_page = 'Benvenuti nello shop';
    return view('welcome', compact('title_page'));
})->name('shop');
