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
Route::group(['middleware' => ['auth.admin']], function() {
    Route::get('/admin/index', 'AdminController@index')->name('admin');
    Route::post('/admin/logout', 'AdminController@logout')->name('admin_logout');
    Route::get('/admin/user_list', 'AdminController@userList')->name('user_list');
    Route::get('/admin/rsv_list', 'AdminController@rsvList')->name('rsv_list');
    Route::get('/admin/user/{id}','AdminController@userDetail')->name('user_detail');
    Route::post('/admin/user/delete','AdminController@userDelete')->name('user_delete');
});

//管理者ログイン
Route::get('/admin/login', 'AdminController@showLoginForm')->name('admin_login_form');
Route::post('/admin/login', 'AdminController@login')->name('admin_login');


