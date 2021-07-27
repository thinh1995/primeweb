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
    Route::get('/sign-in', [
        'uses' => 'HomeController@signIn',
        'as' => 'frontend.sign_in'
    ]);
});


