<?php

namespace LaravelEnso\Departments\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\Tables\Builders\DepartmentTable;
use LaravelEnso\Tables\Traits\Data;

class TableData extends Controller
{
    use Data;

    protected $tableClass = DepartmentTable::class;
}
