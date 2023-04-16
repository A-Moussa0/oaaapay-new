<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OfferType;
use Faker\Generator as Faker;

$factory->define(OfferType::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName($gender = null),
        'description' => $faker->firstName($gender = null),
    ];
});
