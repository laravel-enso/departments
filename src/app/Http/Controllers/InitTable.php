<?php

namespace LaravelEnso\Departments\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\App\Tables\Builders\DepartmentTable;
use LaravelEnso\Tables\App\Traits\Init;

class InitTable extends Controller
{
    use Init;

    protected $tableClass = DepartmentTable::class;
}
