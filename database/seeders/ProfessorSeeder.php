<?php

namespace Database\Seeders;

use App\Models\Professor;
use Illuminate\Database\Seeder;

class ProfessorSeeder extends Seeder
{
    public function run(): void
    {
        $professores = [
            [
                'nome' => 'Carlos Oliveira',
            ],
            [
                'nome' => 'Ana Paula Souza',
            ],
            [
                'nome' => 'João Martins',
            ],
            [
                'nome' => 'Fernanda Costa',
            ],
            [
                'nome' => 'Rafael Santos',
            ],
        ];

        foreach ($professores as $professor) {
            Professor::create($professor);
        }
    }
}