<?php

// use Faker\Generator as Faker;

$factory->define(App\Models\Group::class, function ($faker) {
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

    $countries = ['Uganda', 'Kenya', 'Tanzania'];

    return [
        'name'       => $faker->name,
        'district'   => $faker->randomElement($districts),
        'village'    => $faker->region,
        'subcounty'  => $faker->region,
        'country'    => $faker->randomElement($countries),
    ];
});
