<?php

namespace Database\Seeders;

use App\Models\Matricula;
use Illuminate\Database\Seeder;

class MatriculaSeeder extends Seeder
{
    public function run(): void
    {
        $matriculas = [
            [
                'aluno_id' => 1,
                'turma_id' => 1,
                'nota' => 8.50,
            ],
            [
                'aluno_id' => 2,
                'turma_id' => 1,
                'nota' => 7.75,
            ],
            [
                'aluno_id' => 3,
                'turma_id' => 2,
                'nota' => 9.00,
            ],
            [
                'aluno_id' => 4,
                'turma_id' => 2,
                'nota' => 8.25,
            ],
            [
                'aluno_id' => 5,
                'turma_id' => 3,
                'nota' => 7.50,
            ],
            [
                'aluno_id' => 6,
                'turma_id' => 3,
                'nota' => 9.25,
            ],
            [
                'aluno_id' => 7,
                'turma_id' => 4,
                'nota' => 8.00,
            ],
            [
                'aluno_id' => 8,
                'turma_id' => 4,
                'nota' => 6.75,
            ],
            [
                'aluno_id' => 9,
                'turma_id' => 5,
                'nota' => 9.50,
            ],
            [
                'aluno_id' => 10,
                'turma_id' => 5,
                'nota' => 8.75,
            ],
        ];

        foreach ($matriculas as $matricula) {
            Matricula::create($matricula);
        }
    }
}