<?php

namespace LaravelEnso\Departments\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\app\Models\Department;
use LaravelEnso\Select\app\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected $model = Department::class;
}
