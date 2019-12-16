<?php

namespace LaravelEnso\Departments\app\Tables\Builders\Administration;

use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\Departments\app\Models\Department;
use LaravelEnso\Tables\app\Contracts\Table;

class DepartmentTable implements Table
{
    protected const TemplatePath = __DIR__.'/../../Templates/Administration/departments.json';

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
