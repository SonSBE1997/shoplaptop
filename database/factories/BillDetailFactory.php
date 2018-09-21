<?php

use Faker\Generator as Faker;

$factory->define(\App\BillDetail::class, function (Faker $faker) {
//    $laptop = factory(\App\Laptop::class)->create();
    return [
        'laptop_id' => $faker->numberBetween(1, 20),
        'quantity' => $faker->numberBetween(1, 2),
        'price' => $faker->numberBetween(10000000, 50000000),
        'created_by' => $faker->numberBetween(1, 10),
        'modified_by' => null
    ];
});
