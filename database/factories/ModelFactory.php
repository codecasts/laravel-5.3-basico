<?php

$factory->define(Charlie\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(\Charlie\Customer::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
        'birthdate' => $faker->datetime(),
        'special_customer' => $faker->boolean,
    ];
});





