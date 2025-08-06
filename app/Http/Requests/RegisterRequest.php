<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
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
    protected function prepareForValidation()
    {
        $this->merge([
            'name' => ucwords(strtolower($this->name)),
            'email' => strtolower($this->email)
        ]);
    }

    public function rules(): array
    {
        return [
            // Name
            'name' => [
                'required',
                'string',
                'min:3',
                'max:20',
                'regex:/^[a-zA-ZÀ-ÿ\s]+$/u'
            ],

            // Email
            'email' => [
                'required',
                'email',
                'unique:users,email'
            ],

            // Password
            'password' => [
                'required',
                'confirmed',
                Password::min(8)
                    ->max(30)
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                // ->uncompromised()
            ],
        ];
    }

    public function messages()
    {
        return [
            // Name
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a valid string.',
            'name.min' => 'The name must be at least :min characters.',
            'name.max' => 'The name may not be greater than :max characters.',

            // Email
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email is already registered.',

            // Password
            'password.required' => 'The password field is required.',
            'password.confirmed' => 'The password confirmation does not match.',
            'password.uncompromised' => 'This password has appeared in a data breach. Please choose a different one.',
            'password.*' => 'Your password must be between 8 and 30 characters, include both uppercase and lowercase letters, contain at least one number and one special character, and must not be found in known data breaches.',
        ];
    }

}
