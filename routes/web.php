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
    return view('welcome');
});
Auth::routes();
Route::get('/admin', 'ProductAjaxController@index')->name('dashboard')->middleware('auth');
Route::resource('admin/products','ProductAjaxController')->middleware('auth');
Route::resource('ajaxproducts','ProductAjaxController');
// Route::resource('ajaxproducts/index','ProductAjaxController');

Route::get('/home', 'HomeController@index')->name('welcome');
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/p/create','PostsController@create')->name('p.create');
Route::get('/p/{post}','PostsController@show')->name('p.show');
Route::get('/p','PostsController@index')->name('p');
Route::post('/p','PostsController@store');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

