<?php

namespace LaravelEnso\Departments\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\Models\Department;
use LaravelEnso\Select\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected $model = Department::class;
}
