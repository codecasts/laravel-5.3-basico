<?php

Route::get('/', function () {
    return 'Seja bem vindo ao curso Laravel Basico com Codecasts!';
});

Route::group(['prefix' => 'admin'], function () {
    Route::resource('clientes', 'CustomersController');
});
