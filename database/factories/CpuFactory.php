<?php

use Faker\Generator as Faker;

$factory->define(\App\Cpu::class, function (Faker $faker) {
    $cpu = 'cpu ';
    $i = 1;
    $sockets = ['LGA 2011' => 0, 'LGA 1155' => 1, 'LGA 1366' => 2, 'LGA 1356' => 3, 'LGA 1150' => 4, 'LGA 2011-3' => 5];
    $core = ['i3' => 0 , 'i5' => 1 , 'i7' => 2 ];
    return [
        'name' => $cpu . $i++,
        'socket' => array_rand($sockets, 1),
        'core' => array_rand($core, 1),
        'speed' => $faker->numberBetween(1, 3),
        'max_speed' => $faker->numberBetween(2, 4),
        'cache' => $faker->numberBetween(3, 6),
        'integrated_graphic' => str_random(10),
    ];
});
