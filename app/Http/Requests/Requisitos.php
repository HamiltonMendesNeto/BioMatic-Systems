<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use function Laravel\Prompts\password;

class Requisitos extends FormRequest
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
        $userID = $this->route('user');

        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ];
    }

    public function messages(){
        return[
            'name.required' => 'Campo nome Obrigatorio',
            'email.required' => 'Campo E-mail Obrigatorio',
            'email.email' => 'Necessário enviar um e-mail válido! example@site.com',
            'email.unique' => 'E-mail já cadastrado',
            'password.required'=> 'Campo senha Obrigatorio',
            'password.min' => 'A senha deve conter no mínimo ou :min caracteres',
        ];
    }
}
