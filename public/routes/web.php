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
    return view('main');
});

Route::match(['get', 'post'], '/firm', 'SearchController@firm');
Route::match(['get', 'post'], '/firm_category', 'SearchController@searchFirmCategory');

Route::get('firms/search/{keyword}', 'SearchController@firms');
Route::get('create', 'SearchController@create');

Route::get('buildings/view/{id}', 'BuildingController@view');
Route::get('buildings/all', 'BuildingController@all');
Route::get('buildings/firm/{id}', 'BuildingController@firmsBuilding');
Route::get('buildings/geo/{geo}', 'BuildingController@geo');

Route::get('categories/view/{id}', 'CategoryController@view');
Route::get('categories/firms/{id}', 'CategoryController@firmsCategory');
Route::get('categories/all', 'CategoryController@all');

Route::get('firms/view/{id}', 'FirmController@view');
Route::get('firms/all', 'FirmController@all');
Route::get('firms/geo/{geo}', 'BuildingController@firms');


