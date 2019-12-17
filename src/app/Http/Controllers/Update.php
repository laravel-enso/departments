<?php

namespace LaravelEnso\Departments\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\app\Http\Requests\ValidateDepartmentRequest;
use LaravelEnso\Departments\app\Models\Department;

class Update extends Controller
{
    public function __invoke(ValidateDepartmentRequest $request, Department $department)
    {
        $department->update($request->validated());

        return ['message' => __('The department was successfully updated')];
    }
}
