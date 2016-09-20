<?php

$factory->define(\Charlie\Customer::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
        'birthdate' => $faker->datetime(),
        'special_customer' => $faker->boolean,
    ];
});
