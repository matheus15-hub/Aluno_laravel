<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    // Listar todos os alunos
    public function index()
    {
        return 'Lista de alunos';
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
