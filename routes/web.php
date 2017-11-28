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

Route::view('/', 'index');
Route::view('/products', 'products');
Route::view('/single', 'single');
Route::get('/checkout', 'TransaksiController@checkout')->name('checkout');
Route::get('/pembayaran', 'TransaksiController@pembayaran')->name('pembayaran');
Route::get('/konfirmasi', 'TransaksiController@konfirmasi')->name('konfirmasi');
