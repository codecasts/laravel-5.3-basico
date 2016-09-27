<?php

Route::get('/', function () {
    return 'Seja bem vindo ao curso Laravel Basico com Codecasts!';
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('clientes', ['as' => 'customer.index', 'uses' => 'CustomersController@index']);
    Route::get('cliente/{id}', ['as' => 'customer.get', 'uses' => 'CustomersController@get']);
    Route::post('cliente', ['as' => 'customer.create', 'uses' => 'CustomersController@create']);
    Route::put('cliente/{id}', ['as' => 'customer.update', 'uses' => 'CustomersController@update']);
    Route::delete('cliente/{id}', ['as' => 'customer.delete', 'uses' => 'CustomersController@delete']);
});
