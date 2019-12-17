<?php

namespace LaravelEnso\Departments\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\app\Tables\Builders\DepartmentTable;
use LaravelEnso\Tables\app\Traits\Data;

class TableData extends Controller
{
    use Data;

    protected $tableClass = DepartmentTable::class;
}
