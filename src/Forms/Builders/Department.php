<?php

namespace LaravelEnso\Departments\Forms\Builders;

use LaravelEnso\Departments\Models\Department as Model;
use LaravelEnso\Forms\Services\Form;

class Department
{
    private const TemplatePath = __DIR__.'/../Templates/department.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = new Form($this->templatePath());
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Model $department)
    {
        return $this->form->edit($department);
    }

    protected function templatePath(): string
    {
        return self::TemplatePath;
    }
}
