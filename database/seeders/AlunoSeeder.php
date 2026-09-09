<?php

namespace Database\Seeders;

use App\Models\Aluno;
use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    public function run(): void
    {
        $alunos = [
            [
                'nome' => 'Matheus Rodrigues',
                'idade' => 20,
                'telefone' => '42999990001',
            ],
            [
                'nome' => 'João da Silva',
                'idade' => 21,
                'telefone' => '42999990002',
            ],
            [
                'nome' => 'Maria Oliveira',
                'idade' => 19,
                'telefone' => '42999990003',
            ],
            [
                'nome' => 'Carlos Santos',
                'idade' => 22,
                'telefone' => '42999990004',
            ],
            [
                'nome' => 'Ana Paula Souza',
                'idade' => 20,
                'telefone' => '42999990005',
            ],
            [
                'nome' => 'Lucas Pereira',
                'idade' => 23,
                'telefone' => '42999990006',
            ],
            [
                'nome' => 'Fernanda Costa',
                'idade' => 21,
                'telefone' => '42999990007',
            ],
            [
                'nome' => 'Rafael Martins',
                'idade' => 24,
                'telefone' => '42999990008',
            ],
            [
                'nome' => 'Juliana Alves',
                'idade' => 19,
                'telefone' => '42999990009',
            ],
            [
                'nome' => 'Gabriel Mendes',
                'idade' => 22,
                'telefone' => '42999990010',
            ],
        ];

        foreach ($alunos as $aluno) {
            Aluno::create($aluno);
        }
    }
}