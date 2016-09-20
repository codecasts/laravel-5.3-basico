<?php

Route::get('/', function () {
    // LISTAR CUSTOMERS
    // $customers = Charlie\Customer::paginate(10);
    // dd($customers->toArray());
    // echo $customers->render();

    // CRIAR NOVO CUSTOMER
    $data = [
        'name' => 'Fabio Vedovelli',
        'city' => 'Santo Andre',
        'state' => 'SP',
        'special_customer' => true,
        'birthdate' => '1974-08-07 00:00:00'
    ];
    $customer = Charlie\Customer::create($data);
    dd($customer->toArray());

    // TRAZER CUSTOMER ID 2

    $data = [
        'name' => 'Um novo cara',
        'birthdate' => '1989-01-01 00:00:00',
    ];

    $customer = Charlie\Customer::find(2);

    $customer->name = 'Um outro cara';
    // $customer->save();

    $customer->update($data);


});
