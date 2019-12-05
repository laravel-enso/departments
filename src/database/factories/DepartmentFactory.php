<?php

use Faker\Generator as Faker;
use LaravelEnso\Departments\app\Models\Department;

$factory->define(Department::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
    ];
});
