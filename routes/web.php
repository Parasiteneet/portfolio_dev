<?php


Route::get('/', function () {
    return view('top');
});

Route::prefix('without')->group(function () {
    Route::get('input','WithoutController@index')->name('input');
    Route::post('check','WithoutController@check')->name('check');
    Route::post('done','WithoutController@done')->name('done');
});


Route::group(['middleware' => ['auth']], function() {
    Route::get('/book', 'ReserveController@index')->name('reserve');
    Route::post('/book/confirm', 'ReserveController@confirm')->name('confirm');
    Route::post('book/thanks', 'ReserveController@thanks')->name('thanks');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/management/manage','ManageController@index')->name('manage');
    Route::get('/management/edit','ManageController@edit')->name('edit');
    Route::post('/management/update','ManageController@update')->name('update');
    Route::get('/management/delete','ManageController@delete')->name('delete');
    Route::post('/management/erase','ManageController@erase')->name('erase');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mypage', 'MypageController@index')->middleware('auth')->name('mypage');



/*
---DBにINSERTできているかのテスト
*/
// Route::get('/book/test','TestController@show');
// Route::post('/book/test','TestController@test');



