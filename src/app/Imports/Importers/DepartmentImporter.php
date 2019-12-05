<?php

namespace LaravelEnso\Departments\app\Imports\Importers;

use LaravelEnso\Core\app\Models\User;
use LaravelEnso\DataImport\app\Contracts\Importable;
use LaravelEnso\Departments\app\Models\Department;
use LaravelEnso\Helpers\app\Classes\Obj;

class DepartmentImporter implements Importable
{
    public function run(Obj $row, User $user, Obj $params)
    {
        $this->import($row);
    }

    private function import($row)
    {
        Department::create($row->toArray());
    }
}
