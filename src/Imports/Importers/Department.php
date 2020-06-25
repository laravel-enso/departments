<?php

namespace LaravelEnso\Departments\Imports\Importers;

use LaravelEnso\Core\Models\User;
use LaravelEnso\DataImport\Contracts\Importable;
use LaravelEnso\Departments\Models\Department as Model;
use LaravelEnso\Helpers\Classes\Obj;

class Department implements Importable
{
    public function run(Obj $row, User $user, Obj $params)
    {
        $this->import($row);
    }

    private function import($row)
    {
        Model::create($row->toArray());
    }
}
