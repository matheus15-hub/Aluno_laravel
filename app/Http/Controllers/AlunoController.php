<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoRequest;
use App\Models\Aluno;
use App\Models\Matricula;
use App\Models\Turma;
use Illuminate\Support\Facades\Gate;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();

        return view('alunos.index', compact('alunos'));
    }

    public function show($id)
    {
        $aluno = Aluno::findOrFail($id);

        return view('alunos.show', compact('aluno'));
    }

    public function create()
        {
            Gate::authorize('create', Aluno::class);

            $turmas = Turma::with('curso')->get();

            return view('alunos.create', compact('turmas'));
        }

    public function store(AlunoRequest $request)
{
            Gate::authorize('create', Aluno::class);

            $aluno = Aluno::create([
                'nome' => $request->nome,
                'idade' => $request->idade,
                'telefone' => $request->telefone,
            ]);

            Matricula::create([
                'aluno_id' => $aluno->id,
                'turma_id' => $request->turma_id,
                'nota' => 0,
            ]);

            return redirect()->route('alunos.index');
        }

    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);

        Gate::authorize('update', $aluno);

        return view('alunos.edit', compact('aluno'));
    }

    public function update(AlunoRequest $request, $id)
    {
        $aluno = Aluno::findOrFail($id);

        Gate::authorize('update', $aluno);

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

        Gate::authorize('delete', $aluno);

        $aluno->delete();

        return redirect()->route('alunos.index');
    }
}