<?php

namespace LaravelEnso\Departments\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\App\Forms\Builders\DepartmentForm;
use LaravelEnso\Departments\App\Models\Department;

class Edit extends Controller
{
    public function __invoke(Department $department, DepartmentForm $form)
    {
        return ['form' => $form->edit($department)];
    }
}
