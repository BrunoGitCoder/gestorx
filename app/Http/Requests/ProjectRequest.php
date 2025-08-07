<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Psy\CodeCleaner\ReturnTypePass;

class ProjectRequest extends FormRequest
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

    public function prepareForValidation()
    {
        $this->merge([
            'user_id' => Auth::user()->id,
            'title' => ucwords($this->title),
            'description' => ucfirst($this->description)
        ]);
    }

    public function rules(): array
    {
        return [
            // User_id
            'user_id' => [
                'required'
            ],

            // Tittle
            'title' => [
                'required',
                'string',
                'min:5',
                'max:50'
            ],

            // Description
            'description' => [
                'required',
                'string',
                'min:5',
                'max:255'
            ]
        ];
    }
}
