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
                'user_id' => 1,
                'curso_id' => 1,
            ],
            [
                'nome' => 'SI - 2º Semestre',
                'user_id' => 2,
                'curso_id' => 1,
            ],
            [
                'nome' => 'ES - 1º Semestre',
                'user_id' => 3,
                'curso_id' => 2,
            ],
        ];

        foreach ($turmas as $turma) {
            Turma::create($turma);
        }
    }
}