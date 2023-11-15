<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyEmployee extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'company_name' => 'required|string|max:255',
            'company_email' => 'required|email|max:255',
            'company_website' => 'required|url|max:255',
            'employee_first_name' => 'required|string|max:255',
            'employee_last_name' => 'required|string|max:255',
            'employee_email' => 'required|email|max:255',
            'employee_phone' => 'required|string|max:20',
            'employee_image' => 'image|mimes:jpeg,png,jpg|max:2048', // Add this line for image validation

        ];
    }

}