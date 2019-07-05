<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Group;
use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Group::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->name,
    ];
});
