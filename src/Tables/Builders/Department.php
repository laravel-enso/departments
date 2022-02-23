<?php

namespace LaravelEnso\Departments\Tables\Builders;

use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\Departments\Models\Department as Model;
use LaravelEnso\Tables\Contracts\Table;

class Department implements Table
{
    private const TemplatePath = __DIR__.'/../Templates/departments.json';

    public function query(): Builder
    {
        return Model::selectRaw('
            departments.id, departments.name, departments.description
        ');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
