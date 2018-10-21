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

Route::get('upload','uploadController@index');
Route::post('store','uploadController@store');
Route::get('show','uploadController@show');
Route::get('file','fileUploadController@showFrom')->name('
	upload.file');
Route::post('file','fileUploadController@storeFile');
Route::get('/multfile', function () {
    return view('upload.multifile');
});
Route::post('multfile','fileUploadController@storeMultFile');