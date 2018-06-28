<?php


Route::get('/', 'FrontController@index')->name('main');
Route::get('/post/{post}/{slug?}', 'FrontController@post')->name('post.detail');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
