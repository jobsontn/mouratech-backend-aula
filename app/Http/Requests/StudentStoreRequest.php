<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StudentStoreRequest extends FormRequest
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
            'enrollment' => 'required|string|max:20',
            'CPF' => 'required|min:11|max:14',
            'name' => 'required|string|max:255',
            'motherName' => 'required|string|max:255',
            'fatherName' => 'nullable|string|max:255',
            'birthday' => 'required|date',
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
