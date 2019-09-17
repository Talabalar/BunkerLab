<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teacher;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'name'=>$faker->firstName,
        'surname'=>$faker->lastName,
        'username'=>$faker->userName,
        'passport'=>$faker->uuid,
        'user_id'=>$faker->numberBetween(1,50),
    ];
});
