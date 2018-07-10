<?php

// use Faker\Generator as Faker;

$factory->define(App\Models\Agroexpert::class, function ($faker) {
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

    // $countries = ['Uganda', 'Kenya', 'Tanzania'];

    return [
        'name'      => $faker->name,
        'phone'     => $faker->unique()->phoneNumber,
        'district'  => $faker->randomElement($districts),
        'village'   => $faker->region,
        'country'   => 'Uganda',
    ];
});
