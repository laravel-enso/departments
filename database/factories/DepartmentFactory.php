<?php

namespace LaravelEnso\Departments\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use LaravelEnso\Departments\Models\Department;

class DepartmentFactory extends Factory
{
    protected $model = Department::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->sentence,
        ];
    }
}
