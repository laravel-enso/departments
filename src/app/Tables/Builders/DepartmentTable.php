<?php

namespace LaravelEnso\Departments\App\Tables\Builders;

use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\Departments\App\Models\Department;
use LaravelEnso\Tables\App\Contracts\Table;

class DepartmentTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/departments.json';

    public function query(): Builder
    {
        return Department::selectRaw('
            departments.id, departments.name, departments.description
        ');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
