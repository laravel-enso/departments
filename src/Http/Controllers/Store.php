<?php

namespace LaravelEnso\Departments\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Departments\Http\Requests\ValidateDepartment;
use LaravelEnso\Departments\Models\Department;

class Store extends Controller
{
    public function __invoke(ValidateDepartment $request, Department $department)
    {
        $department->fill($request->validated())->save();

        return [
            'message' => __('The department was successfully created'),
            'redirect' => 'administration.departments.edit',
            'param' => ['department' => $department->id],
        ];
    }
}
