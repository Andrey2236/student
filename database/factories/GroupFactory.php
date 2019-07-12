<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Group;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Group::class, function (Faker $faker) {
    return [
        'name' => $faker->shuffle('ABSDF'),
        'description' => $faker->text,
    ];
});
