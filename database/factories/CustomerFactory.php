<?php

use Faker\Generator as Faker;

$factory->define(\App\Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone_number' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address
    ];
});

