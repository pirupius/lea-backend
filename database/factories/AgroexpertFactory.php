<?php

// use Faker\Generator as Faker;

$factory->define(App\Models\Agroexpert::class, function ($faker) {
    $faker = Faker\Factory::create('en_UG');

    return [
        'name'      => $faker->name,
        'phone'     => $faker->unique()->phoneNumber,
        'district'  => $faker->city,
        'village'   => $faker->streetName,
        'country'   => 'Uganda',
    ];
});
