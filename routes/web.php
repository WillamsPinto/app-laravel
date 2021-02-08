<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return 'login';
})->name('login');

Route::resource('products', 'App\Http\Controllers\ProductController');

Route::get('/produtos', function () {
    return 'pagina de produtos';
});