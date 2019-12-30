<?php

namespace LaravelEnso\Departments\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\App\Tables\Builders\DepartmentTable;
use LaravelEnso\Tables\App\Traits\Data;

class TableData extends Controller
{
    use Data;

    protected $tableClass = DepartmentTable::class;
}
