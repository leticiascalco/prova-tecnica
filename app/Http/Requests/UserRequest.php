<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //validação de cadastro de usuário
            'name' => 'required|min:6',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email é obrigatório.',
            'name.required' => 'Nome é obrigatório.',
            'password.required' => 'Senha é obrigatória.',
            'email.email' => 'Insira um e-mail válido.',
            'name.min' => 'Nome precisa ter no mínimo :min caracteres.',
            'password.min' => 'Senha precisa ter no mínimo :min caracteres.',
        ];
    }
}
