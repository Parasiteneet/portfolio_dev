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

Route::group(['middleware' => ['auth']], function() {
    Route::get('/book/', 'ReserveController@index')->name('reserve');
    Route::post('/book/confirm', 'ReserveController@confirm')->name('confirm');
    Route::post('book/thanks', 'ReserveController@thanks')->name('thanks');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/management/manage','ManageController@index')->name('manage');
    Route::get('/management/edit','ManageController@edit')->name('edit');
    Route::post('/management/update','ManageController@update')->name('update');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mypage', 'MypageController@index')->middleware('auth')->name('mypage');



/*
---DBにINSERTできているかのテスト
*/
// Route::get('/book/test','TestController@show');
// Route::post('/book/test','TestController@test');



