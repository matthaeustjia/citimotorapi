<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Sparepart::class, function (Faker $faker) {
    return [
            'id' => $faker->ean13,
            'name' => $faker->name,
            'type' => $faker->name,
            'car' => $faker->name,
            'sellingprice' => $faker->numberBetween(10000, 1000000),
            'buyingprice' => $faker->numberBetween(10000, 1000000),
    ];
});
