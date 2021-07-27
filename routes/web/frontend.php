<?php

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', [
        'uses' => 'HomeController@index',
        'as' => 'frontend.index'
    ]);
    Route::get('/home', [
        'uses' => 'HomeController@index',
        'as' => 'frontend.index'
    ]);
    Route::get('/login', [
        'uses' => 'HomeController@showLoginForm',
        'as' => 'frontend.show_login_form'
    ]);
    Route::post('/login', [
        'uses' => 'HomeController@login',
        'as' => 'login'
    ]);
    Route::get('/themes', [
        'uses' => 'HomeController@themeIndex',
        'as' => 'frontend.theme_index'
    ]);
    Route::get('/demo/{template}', [
        'uses' => 'HomeController@demo',
        'as' => 'frontend.demo'
    ]);
});


