<?php

namespace LaravelEnso\Departments\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ValidateDepartmentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', $this->nameUnique()],
            'description' => 'required|string',
        ];
    }

    protected function nameUnique()
    {
        return Rule::unique('departments', 'name')
            ->ignore(optional($this->route('department'))->id);
    }
}
