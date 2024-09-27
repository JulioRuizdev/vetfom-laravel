<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password as PasswordRules;

class RegistroRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:9', 'unique:users,phone'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => [
                'required',
                'confirmed',
                PasswordRules::min(8)->letters()->symbols()->numbers(),

            ],

        ];
    }

    public function messages()
    {
        return [
            'name' => 'El campo nombre es requerido',
            'phone' => 'El campo telefono es requerido',
            'email.required' => 'El campo email es requerido',
            'email.email' => 'El campo email no es valido',
            'email.unique' => 'El email ya esta en uso',
            'password' => 'La contraseña debe tener al menos 8 caracteres, una letra, un número y un símbolo',

        ];
    }
}
