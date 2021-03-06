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

Route::get('/', "HomePagesController@home")->name('home');

Route::get('signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController');

Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');

Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::resource('goods', 'GoodsController', ['only' => ['store', 'show', 'update']]);

Route::resource('comments', 'CommentsController', ['only' => ['store']]);

Route::resource('biddings', 'BiddingsController', ['only' => ['store']]);

Route::post('pdf', 'PdfController@store')->name('pdf');

Route::get('searchBiddings', 'BiddingsController@home')->name('biddings.search');
Route::get('getBiddings', 'BiddingsController@getBiddings')->name('biddings.results');

Route::resource('carts', 'CartsController', ['only' => ['store', 'destroy']]);