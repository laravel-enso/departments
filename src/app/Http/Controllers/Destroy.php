<?php

namespace LaravelEnso\Departments\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\app\Models\Department;

class Destroy extends Controller
{
    public function __invoke(Department $department)
    {
        $department->delete();

        return [
            'message' => __('The department was successfully deleted'),
            'redirect' => 'administration.departments.index',
        ];
    }
}
