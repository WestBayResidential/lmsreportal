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

Route::get('/home', 'HomeController@index');

//Route::get('/certificates', 'CertificatesController@select')->name('certificates');
Route::get('/certificates', 'CertificatesController@selectSortByName')->name('certificates');

Route::get('/certificatesbylocation', 'CertificatesController@selectSortByLocation')->name('certbyloc');

Route::get('/certificatesbydate', 'CertificatesController@selectSortByDate')->name('certbydate');

Route::get('/certificatesbyname', 'CertificatesController@selectSortByCertname')->name('certbyname');


