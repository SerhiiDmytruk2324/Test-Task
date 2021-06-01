<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Books::class, function (Faker $faker) {
    $title = $faker->sentence(rand(1,5), true);

$data = [
    'title'   => $title,
    'excerpt' => $faker->text(rand(40,100)),
    'price'   => rand(1,50),
];
return $data;
});
