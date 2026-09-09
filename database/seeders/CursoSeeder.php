<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    public function run(): void
    {
        $cursos = [
            [
                'nome' => 'Sistemas de Informação',
            ],
            [
                'nome' => 'Engenharia de Software',
            ],
            [
                'nome' => 'Análise e Desenvolvimento de Sistemas',
            ],
            [
                'nome' => 'Ciência da Computação',
            ],
        ];

        foreach ($cursos as $curso) {
            Curso::create($curso);
        }
    }
}