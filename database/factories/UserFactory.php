<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    $role = ['admin' => 0, 'sale' =>  1, 'moderator' => 2];
    return [
        'username' => $faker->userName,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'name' => $faker->name,
        'gender' => $faker->boolean,
        'date_of_birth' => $faker->dateTime(),
        'phone_number' => $faker->phoneNumber,
        'address' => $faker->address,
        'email' => $faker->unique()->safeEmail,
        'role' => array_rand($role, 1),
        'remember_token' => str_random(10),
    ];
});

