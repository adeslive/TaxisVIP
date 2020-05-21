<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vehicle;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Vehicle::class, function (Faker $faker) {
    return [
        'color' => $faker->colorName,
        'motor' => Str::random(8),
        'vin' => Str::random(10),
        'vehiclelicense' => Str::random(8),
        'brand' => $faker->company,
        'model' => Str::random(4),
        'drivers_id' => factory(App\Driver::class)
    ];
});
