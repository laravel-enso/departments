<?php

namespace LaravelEnso\Departments\App\Imports\Importers;

use LaravelEnso\Core\App\Models\User;
use LaravelEnso\DataImport\App\Contracts\Importable;
use LaravelEnso\Departments\App\Models\Department;
use LaravelEnso\Helpers\App\Classes\Obj;

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
