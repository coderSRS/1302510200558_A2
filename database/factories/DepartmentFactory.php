<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Department;
use Faker\Generator as Faker;

$factory->define(Department::class, function (Faker $faker) {
    $shor_names = ['cse', 'eee', 'dell'];
    return [
        //
        'name'       => $faker->word(),
        'short_name' => $faker->randomElement($shor_names),

    ];
});
