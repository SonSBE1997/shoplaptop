<?php

use Faker\Generator as Faker;

$factory->define(\App\LaptopConfig::class, function (Faker $faker) {
    $disks = ['HDD 512GB' => 0, 'HDD 1TB' => 2, 'HDD 2TB'];
    $screens = ['HD 720p' => 0, 'Full HD 1080p' => 1];
    return [
        'producer_id' => $faker->numberBetween(1, 7),
        'cpu_id' => $faker->numberBetween(1, 10),
        'ram_id' => $faker->numberBetween(1, 40),
        'memory_socket_count' => $faker->numberBetween(1,2),
        'disk' => array_rand($disks,1),
        'port_connect' => '2xUSB 3.0, 2xThunderbolt 2, 1xSDXC Card, 1xMagSafe 2, 1xHeadphone',
        'dimension' => '277mm x 325mm',
        'screen' => array_rand($screens, 1),
        'battery' => $faker->numberBetween(2, 6)
    ];
});
