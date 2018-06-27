<?php

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
    return view('pages.home');
});
Route::get('products', function () {
    return view('pages.products');
});
Route::get('about', function () {
    return view('pages.about');
});
Route::get('product', function () {
    return view('pages.product');
});
Route::get('contact', function () {
    return view('pages.contact');
});
Route::get('terms', function () {
    return view('pages.terms');
});
