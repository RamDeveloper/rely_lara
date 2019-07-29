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
    return view('home');
});
Auth::routes();
Route::get('/admin', 'ProductAjaxController@index')->name('dashboard')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('admin/products','ProductAjaxController')->middleware('auth');
Route::resource('ajaxproducts','ProductAjaxController');
// Route::resource('ajaxproducts/index','ProductAjaxController');
