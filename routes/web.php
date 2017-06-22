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

Route::get('/', 'PagesController@getIndex');
Route::get('/women', 'PagesController@getWomen');
Route::get('/menu', 'PagesController@getWomenMenu');
Route::get('/preview', 'PagesController@getPreview');
Route::get('/cart', 'PagesController@getCart');
Route::get('/wishlist', 'PagesController@getWishlist');
Route::get('/checkout', 'PagesController@getCheckout');
Route::get('/payment', 'PagesController@getPayment');
Route::get('/review', 'PagesController@getReview');
Route::get('/customer-service', 'PagesController@getCustomerService');
Route::get('/paymentmethod', 'PagesController@getPaymentMethod');
Route::get('/order', 'PagesController@getTrackOrder');
?>