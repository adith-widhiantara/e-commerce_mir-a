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

// HomeController
// Route::get('home', 'HomeController@index')->name('home');

// ShopController
Route::resource('shop', 'ShopController');

// CartController
Route::resource('cart', 'CartController');

// CheckoutController
Route::resource('checkout', 'CheckoutController');
