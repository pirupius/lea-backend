<?php

use Faker\Generator as Faker;

$factory->define(App\Models\News::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'brief' => $faker->text,
        'image' => '',
    ];
});
