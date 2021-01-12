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

// LandingController
Route::get('/', 'LandingController@index')->name('landing.index');

Auth::routes();

// ShopController
Route::resource('shop', 'ShopController');

// CartController
Route::resource('cart', 'CartController');

// CheckoutController
Route::prefix('checkout')->group(function () {
  Route::get('payment', 'CheckoutController@dropboxPayment')->name('checkout.dropboxPayment');
});
Route::resource('checkout', 'CheckoutController');

// UserController
Route::prefix('user')->group(function () {
  Route::get('status', 'UserController@status')->name('user.status');
});
Route::resource('user', 'UserController');

Route::namespace('Admin')->group(function () {
  Route::prefix('admin')->group(function () {
    // ProductController (Admin)
    Route::resource('product', 'ProductController');

    // CategoriesController
    Route::resource('categories', 'CategoriesController');

    // AdminController (Biodata)
    Route::prefix('biodata')->group(function() {
      Route::get('', 'AdminController@biodata')->name('index.biodata.admin');
    });
  });

  // AdminController
  Route::resource('admin', 'AdminController');
});
