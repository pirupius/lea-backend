<?php

// use Faker\Generator as Faker;

$factory->define(App\Models\Farmer::class, function ($faker) {
    $faker = Faker\Factory::create('en_UG');

    return [
        'name'      => $faker->name,
        'gender'    => $faker->randomElement(['Male', 'Female']),
        'phone'     => $faker->unique()->phoneNumber,
        'email'     => $faker->unique()->safeEmail,
        'district'  => $faker->city,
        'location'  => $faker->streetAddress,
    ];
});
