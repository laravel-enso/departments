<?php

namespace LaravelEnso\Departments\Forms\Builders;

use LaravelEnso\Departments\Models\Department;
use LaravelEnso\Forms\Services\Form;

class DepartmentForm
{
    protected const TemplatePath = __DIR__.'/../Templates/department.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = new Form(static::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Department $department)
    {
        return $this->form->edit($department);
    }
}
