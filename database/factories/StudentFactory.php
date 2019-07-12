<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Group;
use App\Discipline;
use App\Assessment;
use App\Student;
use App\Model;
use Faker\Generator as Faker;

$faker = \Faker\Factory::create('ru_RU');





$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'surname' => $faker->lastName,
        'patronymic' => $faker->name,
    ];
});





