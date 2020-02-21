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

Route::get('/',"HomeController@cities")->name("getcities");
Route::get('/to',"HomeController@getCity")->name("getcity");
Route::get('/hamegift',"HomeController@cities")->name("getcities");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', 'UserController@index');
Route::get('/user/delete/{id}', 'UserController@delete');
Route::get('/user/update/{id}', 'UserController@edit');
Route::post('/user/update/{id}', 'UserController@update');
//delete
Route::get('/product', 'ProductController@show');
Route::get('/product/delete/{id}', 'ProductController@delete');
Route::get('/product/addProduct', 'ProductController@index');
Route::get('/fourni/{id}', 'ProductController@getfournisseur');
Route::post('/product/create', 'ProductController@store');

//City
Route::get('/citys', 'cityController@show');
Route::get('/citys/delete/{id}', 'cityController@delete');
Route::get('/citys/updateCity/{id}', 'cityController@edit');
Route::post('/citys/updateCity/{id}', 'cityController@update');
Route::get('/citys/AddCity', 'cityController@index');
Route::post('/citys/create', 'cityController@store');

//Gift
Route::get('/gifttable', 'GiftController@show');
Route::get('/gift', 'GiftController@index');
Route::post('/gift', 'GiftController@store')->name('addgift');
Route::get('/gift/delete/{id}', 'GiftController@destroy');


