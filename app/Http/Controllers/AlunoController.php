<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    // Listar todos os alunos
    public function index()
    {
        return 'Lista de alunos';
    }
    public function alunosPorCurso()
    {
        $alunos = Aluno::select('alunos.*')
            ->join('matriculas', 'matriculas.aluno_id', '=', 'alunos.id')
            ->join('turmas', 'turmas.id', '=', 'matriculas.turma_id')
            ->join('cursos', 'cursos.id', '=', 'turmas.curso_id')
            ->where('cursos.nome', 'Sistemas de Informação')
            ->get();

        return $alunos;
    }
    public function alunosPorNome()
        {
            $alunos = Aluno::where('nome', 'like', '%silva%')->get();

            return $alunos;
        }
    
    public function quantidadeAlunos()
        {
            $quantidade = Aluno::count();

            return $quantidade;
        }


    public function show($id)
    {
        return 'Aluno: ' . $id;
    }

   
    public function create()
    {
        return 'Formulário para criar aluno';
    }

    public function store(Request $request)
    {
        return 'Aluno criado';
    }


    public function edit($id)
    {
        return 'Formulário para editar aluno: ' . $id;
    }


    public function update(Request $request, $id)
    {
        return 'Aluno atualizado: ' . $id;
    }

    public function destroy($id)
    {
        return 'Aluno excluído: ' . $id;
    }

}
