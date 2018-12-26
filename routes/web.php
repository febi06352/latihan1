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


//Route::get('hello', 'ItemCategoryController@tes');
Route::resource('items_category', 'ItemCategoryController');
Route::resource('Suplier', 'SuplierController');
Route::resource('Customer', 'CustomerController');
Route::resource('Returns', 'ReturnController');
