<?php

namespace Database\Seeders;

use App\Models\Turma;
use Illuminate\Database\Seeder;

class TurmaSeeder extends Seeder
{
    public function run(): void
    {
        $turmas = [
            [
                'nome' => 'SI - 1º Semestre',
                'professor_id' => 1,
                'curso_id' => 1,
            ],
            [
                'nome' => 'SI - 2º Semestre',
                'professor_id' => 2,
                'curso_id' => 1,
            ],
            [
                'nome' => 'ES - 1º Semestre',
                'professor_id' => 3,
                'curso_id' => 2,
            ],
            [
                'nome' => 'ADS - 1º Semestre',
                'professor_id' => 4,
                'curso_id' => 3,
            ],
            [
                'nome' => 'CC - 1º Semestre',
                'professor_id' => 5,
                'curso_id' => 4,
            ],
        ];

        foreach ($turmas as $turma) {
            Turma::create($turma);
        }
    }
}