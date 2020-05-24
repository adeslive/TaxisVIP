<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Driver::class, function (Faker $faker) {
    return [
        'license' => Str::random(12),
        'zones_id' => factory(App\Zone::class),
        'users_id' => factory(App\User::class)
    ];
});
