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
// End LandingController

Auth::routes();

// User
Route::namespace('User')->group(function () {
  // ShopController
  Route::resource('shop', 'ShopController');
  // End ShopController

  // CartController
  Route::resource('cart', 'CartController')->middleware('auth');
  // End CartController

  // CheckoutController
  Route::prefix('checkout')->group(function () {
    Route::get('payment', 'CheckoutController@dropboxPayment')->name('checkout.dropboxPayment');
  });
  Route::resource('checkout', 'CheckoutController');
  // End CheckoutController
});
// End User

// UserController
Route::prefix('user')->group(function () {
  Route::get('status', 'UserController@status')->name('user.status');
});
Route::resource('user', 'UserController');
// End UserController

Route::middleware(['auth', 'CheckRole'])->group(function () {
  // Admin
  Route::namespace('Admin')->group(function () {
    Route::prefix('admin')->group(function () {
      // ProductController
      Route::resource('product', 'ProductController');
      // End ProductController

      // CategoriesController
      Route::resource('categories', 'CategoriesController');
      // End CategoriesController

      // AdminController (Biodata)
      Route::prefix('biodata')->group(function() {
        Route::get('', 'AdminController@biodata')->name('admin.biodata.index');
        Route::patch('biodataWebsite', 'AdminController@biodataWebsite')->name('admin.biodata.biodataWebsite');
        Route::post('biodataAdmin', 'AdminController@biodataAdmin')->name('admin.biodata.biodataAdmin');
      });
      // End AdminController (Biodata)
    });

    // AdminController
    Route::resource('admin', 'AdminController');
    // End AdminController
  });
  // End Admin
});
