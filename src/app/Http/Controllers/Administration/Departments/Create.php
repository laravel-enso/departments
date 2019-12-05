<?php

namespace LaravelEnso\Departments\app\Http\Controllers\Administration\Departments;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\app\Forms\Builders\Administration\DepartmentForm;

class Create extends Controller
{
    public function __invoke(DepartmentForm $form)
    {
        return ['form' => $form->create()];
    }
}
