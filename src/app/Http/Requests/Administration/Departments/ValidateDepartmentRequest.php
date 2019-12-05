<?php

namespace LaravelEnso\Departments\app\Http\Requests\Administration\Departments;

use Illuminate\Foundation\Http\FormRequest;

class ValidateDepartmentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'description' => 'required|string'
        ];
    }
}
