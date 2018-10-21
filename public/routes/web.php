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

Route::get('building/geo/{geo}', 'BuildingController@geo');
Route::get('firms/geo/{geo}', 'BuildingController@firms');

Route::match(['get', 'post'], '/firm', 'SearchController@firm');

Route::get('building/view/{id}', 'BuildingController@view');
Route::get('building/all', 'BuildingController@all');

Route::get('category/view/{id}', 'CategoryController@view');
Route::get('category/all', 'CategoryController@all');

Route::get('firm/view/{id}', 'FirmController@view');
Route::get('firm/all', 'FirmController@all');


