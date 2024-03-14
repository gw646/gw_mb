<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RoleRequest extends FormRequest
{
    public function rules(): array
    {
        $rules = [
            'name'=>['required','max:20','unique:roles','string']
        ];
        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $id = $this->route()->parameter('id');
            $rules['name'] = [
                'required',
                'string',
                'max:255',
                Rule::unique('roles')->ignore($id),
            ];
        }
        return $rules;
    }

    public function authorize(): bool
    {
        return true;
    }
}
