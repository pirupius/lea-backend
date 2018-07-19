<?php

$factory->define(App\Models\ExtensionWorker::class, function ($faker) {
    $faker = Faker\Factory::create('en_UG');

    return [
        'name'      => $faker->name,
        'phone'     => $faker->unique()->phoneNumber,
        'district'  => $faker->city,
        'village'   => $faker->streetName,
        'country'   => 'Uganda',
    ];
});
