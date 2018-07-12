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

Auth::routes();

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
Route::get('forgot-password', function () {
    return view('auth.forgot-password');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.backend.index');
    });

    // Category routes
    Route::get('/categories', 'CategoriesController@index')->name('admin.categories.index');
    Route::get('/categories/create', 'CategoriesController@create')->name('admin.categories.create');
    Route::post('/categories', 'CategoriesController@store')->name('admin.categories.store');
    Route::delete('/categories/{market}', 'CategoriesController@destroy')->name('admin.categories.destroy');
    Route::put('/categories/{market}', 'CategoriesController@update')->name('admin.categories.update');
    Route::get('/categories/{market}/edit', 'CategoriesController@edit')->name('admin.categories.edit');

    // product routes
    Route::resource('products', 'ProductController');
});
