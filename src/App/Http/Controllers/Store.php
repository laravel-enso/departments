<?php

namespace LaravelEnso\Departments\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\App\Http\Requests\ValidateDepartmentRequest;
use LaravelEnso\Departments\App\Models\Department;

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
