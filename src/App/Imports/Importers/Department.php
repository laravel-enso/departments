<?php

namespace LaravelEnso\Departments\App\Imports\Importers;

use LaravelEnso\Core\App\Models\User;
use LaravelEnso\DataImport\App\Contracts\Importable;
use LaravelEnso\Departments\App\Models\Department as Model;
use LaravelEnso\Helpers\App\Classes\Obj;

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
