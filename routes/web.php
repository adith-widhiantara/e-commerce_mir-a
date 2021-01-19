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
      Route::get('create/{slug}/image', 'ProductController@createImage')->name('product.image.show');
      Route::post('create/{slug}/image/store', 'ProductController@storeImage')->name('product.image.store');
      Route::delete('delete/{id}/image/', 'ProductController@destroyImage')->name('product.image.delete');

      Route::get('create/{slug}/categories', 'ProductController@createCategories')->name('product.categories.show');
      Route::post('create/{slug}/categories/store', 'ProductController@storeCategories')->name('product.categories.store');
      Route::delete('delete/{cat}/{product}/categories/', 'ProductController@destroyCategories')->name('product.categories.delete');

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
        Route::post('addbank', 'AdminController@addBank')->name('admin.biodata.send.addBank');
      });
      // End AdminController (Biodata)

      // StatusController
      Route::prefix('status')->group(function() {
        Route::get('belumdikonfirmasi', 'StatusController@belumDikonfirmasi')->name('status.belumDikonfirmasi');

        Route::get('belumdibayar', 'StatusController@belumDibayar')->name('status.belumDibayar');
        Route::get('belumdibayar/{id}', 'StatusController@belumDibayarUser')->name('status.belumDibayar.user');

        Route::get('belumdikemas', 'StatusController@belumDikemas')->name('status.belumDikemas');
        Route::get('belumdikemas/{id}', 'StatusController@belumDikemasUser')->name('status.belumDikemas.user');
        Route::post('belumdikemas/cart/{cart}', 'StatusController@belumDikemasSend')->name('status.belumDikemas.send');

        Route::get('sedangdikirim', 'StatusController@sedangDikirim')->name('status.sedangDikirim');
        Route::get('sedangdikirim/{id}', 'StatusController@sedangDikirimUser')->name('status.sedangDikirim.user');

        Route::get('selesai', 'StatusController@selesai')->name('status.selesai');
        Route::get('selesai/{id}', 'StatusController@selesaiUser')->name('status.selesai.user');

        Route::get('dibatalkan', 'StatusController@dibatalkan')->name('status.dibatalkan');
        Route::get('dibatalkan/{id}', 'StatusController@dibatalkanUser')->name('status.dibatalkan.user');
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
