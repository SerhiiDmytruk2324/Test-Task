<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Customers::class, function (Faker $faker) {
    $title = $faker->sentence(rand(1,3), true);

    $data = [
        'name'  => $title,
    ];
    return $data;
});
