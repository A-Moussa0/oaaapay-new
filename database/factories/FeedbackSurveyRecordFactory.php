<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\FeedbackSurveyRecord;
use Faker\Generator as Faker;

$factory->define(FeedbackSurveyRecord::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 134, $max = 134),
        'feedback_survey_id' => $faker->numberBetween($min = 1, $max = 10),
        'reward' => $faker->numberBetween($min = 1, $max = 135),
    ];
});
