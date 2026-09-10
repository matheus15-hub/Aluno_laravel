<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoRequest;
use App\Models\Aluno;
use App\Models\Turma;

class AlunoController extends Controller
{

    
    public function index()
    {
        $alunos = Aluno::all();

        return view('alunos.index', compact('alunos'));
    }

     public function alunosDaTurma($id)
        {
            $turma = Turma::with('matriculas.aluno')->findOrFail($id);

            return view('alunos.turma', compact('turma'));
        }
    public function show($id)
    {
        $aluno = Aluno::findOrFail($id);

        return view('alunos.show', compact('aluno'));
    }


    public function create()
    {
        return view('alunos.create');
    }

  
    public function store(AlunoRequest $request)
    {
        Aluno::create([
            'nome' => $request->nome,
            'idade' => $request->idade,
            'telefone' => $request->telefone,
        ]);

        return redirect()->route('alunos.index');
    }


    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);

        return view('alunos.edit', compact('aluno'));
    }

    public function update(AlunoRequest $request, $id)
    {
        $aluno = Aluno::findOrFail($id);

        $aluno->update([
            'nome' => $request->nome,
            'idade' => $request->idade,
            'telefone' => $request->telefone,
        ]);

        return redirect()->route('alunos.index');
    }


    public function destroy($id)
    {
        $aluno = Aluno::findOrFail($id);

        $aluno->delete();

        return redirect()->route('alunos.index');
    }
}