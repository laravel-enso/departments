<?php

namespace LaravelEnso\Departments\app\Http\Controllers\Administration\Departments;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\app\Tables\Builders\Administration\DepartmentTable;
use LaravelEnso\Tables\app\Traits\Init;

class InitTable extends Controller
{
    use Init;

    protected $tableClass = DepartmentTable::class;
}
