<?php

namespace LaravelEnso\Departments\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\Forms\Builders\Department;

class Create extends Controller
{
    public function __invoke(Department $form)
    {
        return ['form' => $form->create()];
    }
}
