<?php

namespace LaravelEnso\Departments\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\app\Forms\Builders\DepartmentForm;

class Create extends Controller
{
    public function __invoke(DepartmentForm $form)
    {
        return ['form' => $form->create()];
    }
}
