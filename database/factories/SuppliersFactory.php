<?php

// use Faker\Generator as Faker;

$factory->define(App\Models\Supplier::class, function ($faker) {
    $faker = Faker\Factory::create('en_UG');

    $pesticides = ['Rocket', 'Chemical X', 'Dangerous AZ'];
    $countries = ['Uganda', 'Kenya', 'Tanzania'];
    $companies = ['Amvac', 'Arysta', 'Dow Agrosciences', 'Drexel', 'Nufarm', 'Gowan', 'UCCDL'];

    return [
        'name'       => $faker->randomElement($companies),
        'phone'      => $faker->unique()->phoneNumber,
        'pesticides' => $faker->randomElement($pesticides),
        'location'   => $faker->streetAddress,
        'country'    => 'Uganda',
    ];
});
