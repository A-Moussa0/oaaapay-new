<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Merchant;
use Faker\Generator as Faker;

$factory->define(Merchant::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName($gender = null),
        'email' => $faker->unique()->safeEmail,
        'industry_id' => $faker->numberBetween($min = 1, $max = 10),
        'account_manager_id' => $faker->numberBetween($min = 1, $max = 10),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
    ];
});
