<?php

namespace LaravelEnso\Departments\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\App\Http\Requests\ValidateDepartmentRequest;
use LaravelEnso\Departments\App\Models\Department;

class Update extends Controller
{
    public function __invoke(ValidateDepartmentRequest $request, Department $department)
    {
        $department->update($request->validated());

        return ['message' => __('The department was successfully updated')];
    }
}
