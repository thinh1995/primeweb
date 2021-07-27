<?php

Route::domain('{domain}.' . env('APP_DOMAIN'))->group(function () {
    Route::get('/', function ($domain) {
        dd(1);
    });
});

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
        'as' => 'frontend.login'
    ]);

    Route::get('/themes', [
        'uses' => 'HomeController@themeIndex',
        'as' => 'frontend.theme_index'
    ]);
});


