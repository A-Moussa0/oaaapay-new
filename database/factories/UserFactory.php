<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'referrer_id' => $faker->numberBetween($min = 1, $max = 100),
        'mobile' => $faker->unique()->e164PhoneNumber,
        'email' => $faker->unique()->safeEmail,
        'points_balance' => $faker->numberBetween($min = 0, $max = 50000),
        'pending_points_balance' => $faker->numberBetween($min = 0, $max = 50000),
        'total_commissions' => $faker->numberBetween($min = 0, $max = 50000),
        'pending_commissions' => $faker->numberBetween($min = 0, $max = 50000),
        'withdrawn_points' => $faker->numberBetween($min = 0, $max = 50000),
        'total_ads_watched' => $faker->numberBetween($min = 0, $max = 1000),
        'signup_ip' => $faker->ipv4(),
        'last_active' => now(),
        'email_verified_at' => now(),
        'mobile_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        
    ];
});
