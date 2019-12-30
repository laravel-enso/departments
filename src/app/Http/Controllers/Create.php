<?php

namespace LaravelEnso\Departments\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\App\Forms\Builders\DepartmentForm;

class Create extends Controller
{
    public function __invoke(DepartmentForm $form)
    {
        return ['form' => $form->create()];
    }
}
