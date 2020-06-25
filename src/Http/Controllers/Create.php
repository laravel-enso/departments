<?php

namespace LaravelEnso\Departments\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\Forms\Builders\DepartmentForm;

class Create extends Controller
{
    public function __invoke(DepartmentForm $form)
    {
        return ['form' => $form->create()];
    }
}
