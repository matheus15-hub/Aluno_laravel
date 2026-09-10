<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|string|min:3|max:100',
            'idade' => 'required|integer|min:16|max:100',
            'telefone' => 'required|string|min:10|max:15',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O nome do aluno é obrigatório.',
            'nome.string' => 'O nome deve ser um texto.',
            'nome.min' => 'O nome deve ter pelo menos 3 caracteres.',
            'nome.max' => 'O nome pode ter no máximo 100 caracteres.',

            'idade.required' => 'A idade do aluno é obrigatória.',
            'idade.integer' => 'A idade deve ser um número inteiro.',
            'idade.min' => 'A idade mínima é de 16 anos.',
            'idade.max' => 'A idade máxima é de 100 anos.',

            'telefone.required' => 'O telefone do aluno é obrigatório.',
            'telefone.string' => 'O telefone deve ser informado como texto.',
            'telefone.min' => 'O telefone deve ter pelo menos 10 caracteres.',
            'telefone.max' => 'O telefone pode ter no máximo 15 caracteres.',
        ];
    }
}