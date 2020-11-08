<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\FeedbackSurvey;
use Faker\Generator as Faker;

$factory->define(FeedbackSurvey::class, function (Faker $faker) {
    return [
        'offer_id' => $faker->numberBetween($min = 1, $max = 10),
        'host_survey_id' => $faker->numberBetween($min = 1, $max = 10),
        'survey_name' => $faker->firstName($gender = null),
        'response_count' => $faker->numberBetween($min = 1, $max = 135),
    ];
});
