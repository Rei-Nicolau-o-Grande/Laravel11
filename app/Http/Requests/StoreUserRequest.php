<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:255',
            'email' => [
                'required',
                'email',
                'unique:users,email'
            ],
            'password' => [
                'required',
                'string',
                'min:8',
                //'confirmed'
            ]
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nome é obrigatório',
            'name.min' => 'Nome deve ter no mínimo 3 caracteres',
            'name.max' => 'Nome deve ter no máximo 255 caracteres',
            'email.required' => 'E-mail é obrigatório',
            'email.email' => 'E-mail inválido',
            'email.unique' => 'E-mail já cadastrado',
            'password.required' => 'Senha é obrigatória',
            'password.min' => 'Senha deve ter no mínimo 8 caracteres',
            //'password.confirmed' => 'Senhas não conferem'
        ];
    }
}
