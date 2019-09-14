<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teacher;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'name'=>$faker->firstName,
        'surname'=>$faker->lastName,
        'password'=>$faker->password,
        'email'=>$faker->safeEmail,
        'passport'=>$faker->uuid,
    ];
});
