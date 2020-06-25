<?php

namespace LaravelEnso\Departments\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\Forms\Builders\DepartmentForm;
use LaravelEnso\Departments\Models\Department;

class Edit extends Controller
{
    public function __invoke(Department $department, DepartmentForm $form)
    {
        return ['form' => $form->edit($department)];
    }
}
