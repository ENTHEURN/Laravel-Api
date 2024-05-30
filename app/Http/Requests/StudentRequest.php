<?php

namespace App\Http\Requests;


class StudentRequest extends DefaultRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'name' => 'required|string',
            'age' => 'required|integer',
            'phone' => 'required|string|unique:students,phone,NULL,id,deleted_at,NULL',
        ];
        return $rules;
    }
}
