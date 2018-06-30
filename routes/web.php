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
    return view('pages.frontend.home');
});
Route::get('products', function () {
    return view('pages.frontend.products');
});
Route::get('about', function () {
    return view('pages.frontend.about');
});
Route::get('product', function () {
    return view('pages.frontend.product');
});
Route::get('product-type', function () {
    return view('pages.frontend.product-type');
});
Route::get('gallery', function () {
    return view('pages.frontend.gallery');
});
Route::get('contact', function () {
    return view('pages.frontend.contact');
});
Route::get('terms', function () {
    return view('pages.frontend.terms');
});
Route::get('login', function () {
    return view('auth.login');
});
Route::get('forgot-password', function () {
    return view('auth.forgot-password');
});
Route::get('admin', function () {
    return view('pages.backend.index');
});