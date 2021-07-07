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
    return view('top');
});

Route::get('/reserve', 'ReserveController@index')->name('reserve');

// Route::get('/reserve', 'ReserveController@confirm');

// Route::get('/reserve', 'ReserveController@send');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mypage', 'MypageController@index')->middleware('auth')->name('mypage');

Route::get('/manage', function () {
    return view('manage');
})->middleware('auth')->name('manage');



