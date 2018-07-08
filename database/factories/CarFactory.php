<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        //
        'id' => $faker->name,
        'customer_id' => $faker->numberBetween(1, 100),
        'VIN' => $faker->name,
        'carbrand' => $faker->name,
        'carbrand' => $faker->name,
        'carmodel' => $faker->name,
        'fueltype' => $faker->name,
    ];
});
