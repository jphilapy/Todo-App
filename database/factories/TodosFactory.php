<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Todo::class, function (Faker $faker) {
    return [
        'todo' => $faker->sentence(10)
    ];
});


// $factory->define(App\Todo::class, function(Faker\Generator $faker) {
//     return [
//         'todo' => $faker->sentence(10)
//     ];
// });