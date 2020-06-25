<?php

namespace LaravelEnso\Departments\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\Tables\Builders\DepartmentTable;
use LaravelEnso\Tables\Traits\Init;

class InitTable extends Controller
{
    use Init;

    protected $tableClass = DepartmentTable::class;
}
