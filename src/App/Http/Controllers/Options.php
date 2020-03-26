<?php

namespace LaravelEnso\Departments\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\App\Models\Department;
use LaravelEnso\Select\App\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected $model = Department::class;
}
