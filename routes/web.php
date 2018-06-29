<?php


Route::get('/', 'FrontController@index')->name('main');
Route::get('/post/{post}/{slug?}', 'FrontController@post')->name('post.detail');

// portfolio index
Route::get('/portfolio', 'FrontController@portfolio')->name('portfolio.index');

// portfolio detail
Route::get('/portfolio/{post}/{slug?}', 'FrontController@portfolioDetail')->name('portfolio.detail');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
