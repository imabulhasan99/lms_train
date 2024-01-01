<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRegistrationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'min:1', 'max:255'],
            'last_name' => ['required', 'string', 'min:1', 'max:255'],
            'email' => ['required', 'string', 'min:1', 'max:255'],
            'password' => ['required', 'string', 'min:1', 'max:255'],
            'phone' => ['nullable', 'string', 'min:1', 'max:255'],
            'dob' => ['nullable', 'string', 'min:1', 'max:255'],
            'country' => ['required', 'string', 'min:1', 'max:255'],
            'address' => ['nullable', 'string', 'min:1', 'max:255'],
            'address2' => ['nullable', 'string', 'min:1', 'max:255'],
            'city' => ['nullable', 'string', 'min:1', 'max:255'],
            'zip_code' => ['nullable', 'integer'],
            'agree' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'first_name'    => 'First name can not be empty',
            'last_name'     => 'Last name can not be empty',
            'email'         => 'Email can not be empty',
            'password'      => 'Password can not be empty',
            'agree'         => 'You have read our tearms and policy',
            'country'       => 'Select your country',
        ];
    }
}
