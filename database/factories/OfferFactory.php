<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Offer;
use Faker\Generator as Faker;

$factory->define(Offer::class, function (Faker $faker) {
    return [
        'merchant_id' => $faker->numberBetween($min = 1, $max = 10),
        'offer_type_id' => $faker->numberBetween($min = 1, $max = 10),
        'category_id' => $faker->numberBetween($min = 1, $max = 10),
        'cashback_percentage' => $faker->numberBetween($min = 1, $max = 10),
        'name' => $faker->firstName($gender = null),
    ];
});
