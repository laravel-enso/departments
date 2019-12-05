<?php

namespace LaravelEnso\Departments\app\Http\Controllers\Administration\Departments;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\app\Forms\Builders\Administration\DepartmentForm;
use LaravelEnso\Departments\app\Models\Department;

class Edit extends Controller
{
    public function __invoke(Department $department, DepartmentForm $form)
    {
        return ['form' => $form->edit($department)];
    }
}
