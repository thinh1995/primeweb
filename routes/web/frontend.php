<?php

Route::domain('{domain}.' . env('APP_DOMAIN'))->group(function () {
    Route::get('/', function ($domain) {
        return view('welcome');
    });
});
