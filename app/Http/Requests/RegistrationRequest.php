<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'email' => ['required', 'email', 'unique:registrations'],
            'phone' => ['required', 'regex:/^228\d{8}$/'],
            'name' => ['required', 'string', 'min:4'],
            'tournament_type' => ['required', 'in:Dev,CyberSec'],
        ];
    }
}
