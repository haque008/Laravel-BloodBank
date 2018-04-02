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
    return view('layouts.firstpage');
});
    Route::get('/master', function () {
        return view('layouts.master');
    });;
//Route::get('/form', function () {
//    return view('donorform');
//});;


Auth::routes();
Route::get('/home', 'MainController@index')->name('home');
Route::get('/donor_list', 'PublicController@donorList')->name('donor');
Route::post('/request-blood', 'PublicController@store')->name('blood-request');
Route::get('/requestList', 'PublicController@requestList')->name('requestList');
Route::get('/request-blood', 'PublicController@requestBlood')->name('request-blood');
Route::get('/reg', 'HomeController@reg')->name('reg');
//Route::get('/info', 'HomeController@form')->name('info');
Route::post('/log', 'HomeController@store')->name('log');
Route::resource('form','FormController');



Route::get('/request', 'HomeController@requestBlood')->name('request');





