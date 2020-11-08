<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AccountManager;
use Faker\Generator as Faker;

$factory->define(AccountManager::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName($gender = null),
        'mobile_number' => $faker->unique()->e164PhoneNumber,
        'email' => $faker->unique()->safeEmail,
        'clients_count' => $faker->numberBetween($min = 0, $max = 100),
    ];
});
