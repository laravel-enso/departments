<?php

namespace LaravelEnso\Departments\Imports\Importers;

use LaravelEnso\DataImport\Contracts\Importable;
use LaravelEnso\DataImport\Models\DataImport;
use LaravelEnso\Departments\Models\Department as Model;
use LaravelEnso\Helpers\Services\Obj;

class Department implements Importable
{
    public function run(Obj $row, DataImport $import)
    {
        $this->import($row);
    }

    private function import($row)
    {
        Model::create($row->toArray());
    }
}
