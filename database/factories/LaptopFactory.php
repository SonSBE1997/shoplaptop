<?php

use Faker\Generator as Faker;

$factory->define(\App\Laptop::class, function (Faker $faker) {
    $os = ['Windown' => 0, 'Mac Os' => 1];
    $hot = [0, 1];
    $laptop = 'laptop';
    return [
        'name' => $laptop . " " . str_random(4),
        'configuration_id' => $faker->numberBetween(1, 10),
        'price' => $faker->numberBetween(10000000, 50000000),
        'accessories' => 'Dây sạc',
        'weight' => $faker->numberBetween(1, 3),
        'os' => array_rand($os, 1),
        'warranty' => '12 tháng',
        'hot' => array_rand($hot, 1),
        'discount' => $faker->numberBetween(1, 20),
        'created_by' => 1,
        'modified_by' => 1,
    ];
});
