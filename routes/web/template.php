<?php

Route::domain('{domain}.' . env('APP_DOMAIN'))->namespace('Template')->group(function () {

    Route::get('/', [
        'uses' => 'HomeController@index',
        'as' => 'template.index'
    ]);
});
