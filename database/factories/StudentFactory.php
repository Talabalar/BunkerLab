<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name'=>$faker->firstName,
        'surname'=>$faker->lastName,
        'username'=>$faker->userName,
        'user_id'=>$faker->numberBetween(51,100),
        'passport'=>$faker->uuid,
    ];
});
