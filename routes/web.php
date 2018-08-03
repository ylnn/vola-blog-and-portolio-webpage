<?php

// home
Route::get('/', 'FrontController@index')->name('main');

// portfolio index
Route::get('/portfolio', 'FrontController@portfolio')->name('portfolio.index');

// portfolio detail
Route::get('/portfolio/{portfolioID}/{slug?}', 'FrontController@portfolioDetail')->name('portfolio.detail');

// admin routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// update sitemap
Route::get('/update_sitemap', 'FrontController@updateSitemap');

// route for old links - will redirect with 301 status code
Route::get('/post/{post}/{slug?}', 'FrontController@postRedirect')->name('post.detail.id');

// new post route
Route::get('/{slug}', 'FrontController@post')->name('post.detail');