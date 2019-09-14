<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name'=>$faker->firstName,
        'surname'=>$faker->lastName,
        'password'=>$faker->password(7),
        'email'=>$faker->safeEmail,
        'passport'=>$faker->uuid,
    ];
});
