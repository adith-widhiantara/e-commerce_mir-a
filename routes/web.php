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


Route::middleware(['auth'])->group(function () {
  // User
  Route::namespace('User')->group(function () {
    // ShopController
    Route::resource('shop', 'ShopController')->withoutMiddleware('auth');;
    // End ShopController

    // CartController
    Route::resource('cart', 'CartController');
    // End CartController

    // CheckoutController
    Route::prefix('checkout')->group(function () {
      Route::get('payment', 'CheckoutController@dropboxPayment')->name('checkout.dropboxPayment');
    });
    Route::resource('checkout', 'CheckoutController');
    // End CheckoutController

    // UserController
    Route::prefix('user')->group(function () {
      Route::get('status', 'UserController@status')->name('user.status');
    });
    Route::resource('user', 'UserController');
    // End UserController
  });
  // End User
});


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

      // StatusController
      Route::prefix('status')->group(function() {
        Route::get('belumdikonfirmasi', 'StatusController@belumDikonfirmasi')->name('status.belumDikonfirmasi');
      });
      // End StatusController

      // AdminController (userList)
      Route::prefix('userlist')->group(function() {
        Route::get('', 'AdminController@userList')->name('admin.userList');
        Route::get('{id}', 'AdminController@showUser')->name('admin.showUser');
        Route::patch('{id}/send', 'AdminController@sendShowUser')->name('admin.send.showUser');
      });
      // End AdminController (userList)
    });

    // AdminController
    Route::resource('admin', 'AdminController');
    // End AdminController
  });
  // End Admin
});
