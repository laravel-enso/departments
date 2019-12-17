<?php

namespace LaravelEnso\Departments\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\app\Forms\Builders\DepartmentForm;
use LaravelEnso\Departments\app\Models\Department;

class Edit extends Controller
{
    public function __invoke(Department $department, DepartmentForm $form)
    {
        return ['form' => $form->edit($department)];
    }
}
