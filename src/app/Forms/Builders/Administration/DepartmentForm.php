<?php

namespace LaravelEnso\Departments\app\Forms\Builders\Administration;

use LaravelEnso\Departments\app\Models\Department;
use LaravelEnso\Forms\app\Services\Form;

class DepartmentForm
{
    protected const TemplatePath = __DIR__.'/../../Templates/Administration/department.json';

    protected $form;

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
