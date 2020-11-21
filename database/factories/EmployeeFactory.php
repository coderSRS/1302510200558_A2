<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Department;
use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    $departments = Department::pluck('id')->toArray();
    return [
        //
        'name'          => $faker->name(),
        'email'         => $faker->email(),
        'salary'        => $faker->randomNumber(),
        'address'       => $faker->address(),
        'department_id' => $faker->randomElement($departments),

    ];
});
