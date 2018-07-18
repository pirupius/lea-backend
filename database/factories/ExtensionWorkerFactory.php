<?php

$factory->define(App\Models\ExtensionWorker::class, function ($faker) {
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
        'phone'     => $faker->unique()->phoneNumber,
        'district'  => $faker->randomElement($districts),
        'village'   => $faker->region,
        'country'   => 'Uganda',
    ];
});
