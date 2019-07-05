<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Discipline;
use App\Model;
use Faker\Generator as Faker;

$factory->defineAs(App\Discipline::class, 'discipline', function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});