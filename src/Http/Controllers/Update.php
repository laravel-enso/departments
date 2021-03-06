<?php

namespace LaravelEnso\Departments\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\Http\Requests\ValidateDepartmentRequest;
use LaravelEnso\Departments\Models\Department;

class Update extends Controller
{
    public function __invoke(ValidateDepartmentRequest $request, Department $department)
    {
        $department->update($request->validated());

        return ['message' => __('The department was successfully updated')];
    }
}
