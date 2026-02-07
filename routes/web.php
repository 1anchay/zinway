<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::get('welcome', function () {
    return view('welcome');
})->name('welcome'); // Добавьте это

// Маршрут для каталога
Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');

// Дополнительные маршруты для других страниц
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/rasta', function () {
    return view('rasta');
})->name('rasta');