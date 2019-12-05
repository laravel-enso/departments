<?php

namespace LaravelEnso\Departments\app\Http\Controllers\Administration\Departments;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\app\Http\Requests\Administration\Departments\ValidateDepartmentRequest;
use LaravelEnso\Departments\app\Models\Department;

class Store extends Controller
{
    public function __invoke(ValidateDepartmentRequest $request, Department $department)
    {
        $department->fill($request->validated())->save();

        return [
            'message' => __('The department was successfully created'),
            'redirect' => 'administration.departments.edit',
            'param' => ['department' => $department->id],
        ];
    }
}
