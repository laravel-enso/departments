<?php

namespace LaravelEnso\Departments\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\Forms\Builders\Department as Form;
use LaravelEnso\Departments\Models\Department;

class Edit extends Controller
{
    public function __invoke(Department $department, Form $form)
    {
        return ['form' => $form->edit($department)];
    }
}
