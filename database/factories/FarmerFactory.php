<?php

// use Faker\Generator as Faker;

$factory->define(App\Models\Farmer::class, function ($faker) {
    $faker = Faker\Factory::create('en_UG');

    $districts = [
        'Kitgum',
        'Masaka',
        'Mukono',
        'Kasese',
        'Kabale',
        'Jinja',
        'Soroti',
    ];

    return [
        'name'      => $faker->name,
        'gender'    => $faker->randomElement(['Male', 'Female']),
        'phone'     => $faker->unique()->phoneNumber,
        'email'     => $faker->unique()->safeEmail,
        'district'  => $faker->randomElement($districts),
        'location'  => $faker->region,
    ];
});
