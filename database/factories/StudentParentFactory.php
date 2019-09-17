<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\StudentParent;
use Faker\Generator as Faker;

$factory->define(StudentParent::class, function (Faker $faker) {
    return [
        'user_id'=>$faker->numberBetween(101,150),
    ];
});
