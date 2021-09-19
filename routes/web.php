<?php

Auth::routes();

Route::get('/','MypageController@top')->name('top');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mypage', 'MypageController@index')->middleware('auth')->name('mypage');

//会員登録なしで予約
Route::prefix('without')->group(function () {
    Route::get('input','WithoutController@index')->name('input');
    Route::post('check','WithoutController@check')->name('check');
    Route::post('done','WithoutController@done')->name('done');
});

//会員登録ありの予約
Route::group(['middleware' => ['auth']], function() {
    Route::get('/book', 'ReserveController@index')->name('reserve');
    Route::post('/book/confirm', 'ReserveController@confirm')->name('confirm');
    Route::post('book/thanks', 'ReserveController@thanks')->name('thanks');
});

//予約の編集
Route::group(['middleware' => ['auth']], function() {
    Route::get('/management/manage','ManageController@index')->name('manage');
    Route::get('/management/edit','ManageController@edit')->name('edit');
    Route::post('/management/update','ManageController@update')->name('update');
    Route::get('/management/delete','ManageController@delete')->name('delete');
    Route::post('/management/erase','ManageController@erase')->name('erase');
});

//管理人専用ページ
Route::group(['middleware' => ['auth']], function() {
    Route::get('/admin/show', 'AdminController@index')->name('admin');
});



