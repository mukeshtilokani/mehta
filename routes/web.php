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

Route::get('about', function () {
    return view('pages.frontend.about');
});

Route::get('categories', 'Frontend\CategoriesController@index')->name('frontend.categories');

Route::get('category/{id}', 'Frontend\CategoriesController@categoryDetail')->name('frontend.category.detail');

Route::get('product/{id}', 'Frontend\ProductsController@detail')->name('frontend.product.detail');

Route::get('gallery', 'Frontend\GalleryController@index');

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

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function() {
   
    Route::get('dashboard', 'HomeController@dashboard')->name('admin.dashboard');

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

    // Gallery routes
    Route::get('/galleries', 'GalleriesController@index')->name('admin.galleries.index');
    Route::get('/galleries/create', 'GalleriesController@create')->name('admin.galleries.create');
    Route::post('/galleries', 'GalleriesController@store')->name('admin.galleries.store');
    Route::delete('/galleries/{market}', 'GalleriesController@destroy')->name('admin.galleries.destroy');
    Route::put('/galleries/{market}', 'GalleriesController@update')->name('admin.galleries.update');
    Route::get('/galleries/{market}/edit', 'GalleriesController@edit')->name('admin.galleries.edit');

    // product routes
    Route::resource('products', 'ProductController');
});
