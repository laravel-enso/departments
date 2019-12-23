<?php

use Faker\Generator as Faker;
use LaravelEnso\Departments\app\Models\Department;

$factory->define(Department::class, fn(Faker $faker) => [
    'name' => $faker->name,
    'description' => $faker->sentence,
]);
