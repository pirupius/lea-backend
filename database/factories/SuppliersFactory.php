<?php

// use Faker\Generator as Faker;

$factory->define(App\Models\Supplier::class, function ($faker) {
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

    $pesticides = ['Rocket', 'Chemical X', 'Dangerous AZ'];
    $countries = ['Uganda', 'Kenya', 'Tanzania'];

    return [
        'name'       => $faker->name,
        'phone'      => $faker->unique()->phoneNumber,
        'pesticides' => $faker->randomElement($pesticides),
        'district'   => $faker->randomElement($districts),
        'village'    => $faker->region,
        'country'    => $faker->randomElement($countries),
    ];
});
