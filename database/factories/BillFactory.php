<?php

use Faker\Generator as Faker;

$factory->define(\App\Bill::class, function (Faker $faker) {
    $discount = [10 => 1, 15 => 2, 20 => 3, 25 => 4, 30 => 5];
    $status = Array('đã thanh toán' => 0, 'chưa thanh toán' => 1);
    return [
        'order_date' => $faker->date(),
        'user_id' => $faker->numberBetween(1, 10),
        'customer_id' => $faker->numberBetween(1, 20),
        'discount' => array_rand($discount, 1),
        'status' => array_rand($status, 1),
        'created_by' => $faker->numberBetween(1, 10),
//        'created_by' => factory(\App\User::class)->create()->id,
        'modified_by' => null
    ];
});
