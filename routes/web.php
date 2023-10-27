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

Route::get('/', 'AdController@welcome')->name('welcome');
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/annonce', 'AdController@create')->name('ad.create');
Route::post('/annonce/create', 'AdController@store')->name('ad.store');

/*Message routes */
Route::get('/message/{seller_id}/{ad_id}', 'MessageController@create')->name('message.create');

/* Admin auth Route*/
route::namespace('Admin')->group(function() {
    Route::get('admin/login', 'Auth\loginController@showLoginForm')->name('admin.login');
    Route::post('admin/login', 'Auth\loginController@login');
    Route::get('admin/home', 'AdminController@index')->name('admin.home');
});

