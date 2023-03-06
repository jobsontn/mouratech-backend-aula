<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StudentUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'enrollment' => 'nullable',
            'CPF' => 'nullable',
            'name' => 'nullable',
            'motherName' => 'nullable',
            'fatherName' => 'nullable',
            'birthday' => 'nullable',
            'gender' => 'nullable',
            'email' => 'nullable',
            'cellphone' => 'nullable',
            'githubProfile' => 'nullable',
            'campusName' => 'nullable',
            'courseName' => 'nullable',
            'currentPeriod' => 'nullable',
            'group' => 'nullable',
        ];
    }
}
