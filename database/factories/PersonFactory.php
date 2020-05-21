<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'lastname' => $faker->lastName,
        'mail' => $faker->unique()->safeEmail,
        'identity' => $faker->uuid,
        'phone' => $faker->phoneNumber,
    ];
});
