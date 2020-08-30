<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'ProductsController@index')->name('allProducts');

Route::get('product/addToCart/{id}', 'ProductsController@addProductToCart')->name('AddToCartProduct');

Route::get('cart', 'ProductsController@showCart')->name('cartProducts');

Route::get('product/deleteItemFromCart/{id}', 'ProductsController@deleteItemFromCart')->name('DeleteItemFromCart');

// search
Route::get('search', 'ProductsController@search')->name('searchProducts');

// increase single product in cart
Route::get('product/increaseSingleProduct/{id}', 'ProductsController@increaseSingleProduct')->name('IncreaseSingleProduct');

// decrease single product in cart
Route::get('product/decreaseSingleProduct/{id}', 'ProductsController@decreaseSingleProduct')->name('DecreaseSingleProduct');

// create an order
//Route::get('product/createOrder/', 'ProductsController@createOrder')->name('createOrder');

// checkout page
Route::get('product/checkoutProducts/', 'ProductsController@checkoutProducts')->name('checkoutProducts');

// process checkout page
Route::post('product/createNewOrder/', 'ProductsController@createNewOrder')->name('createNewOrder');

// User Authentication
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
