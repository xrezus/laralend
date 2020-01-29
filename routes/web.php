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

Route::get('/', function () {
    return view('site.index');
})->name('home');

Auth::routes();

Route::post('/order', 'OrderController@store')->name('order');


Route::prefix('dashboard')->group(function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('/calendar', 'DashboardController@calendar')->name('calendar');
//    Route::get('/order', 'OrderController@index')->name('order_list');

    Route::resource('order', 'OrderController');

});
