<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Assessment;
use App\Model;
use Faker\Generator as Faker;


$factory->define(App\Assessment::class, function (Faker $faker) {
    return [
        'assessment' => $faker->numberBetween($min = 1, $max = 5),
    ];
});