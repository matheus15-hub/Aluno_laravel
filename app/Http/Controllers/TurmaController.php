<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use Illuminate\Support\Facades\Auth;

class TurmaController extends Controller
{
    public function index()
    {
        if (Auth::user()->role === 'admin') {
            $turmas = Turma::with('curso')->get();
        } else {
            $turmas = Turma::with('curso')
                ->where('user_id', Auth::id())
                ->get();
        }

        return view('turmas.index', compact('turmas'));
    }

    public function alunos($id)
        {
            if (Auth::user()->role === 'admin') {

                $turma = Turma::with('matriculas.aluno')
                    ->findOrFail($id);

            } else {

                $turma = Turma::with('matriculas.aluno')
                    ->where('user_id', Auth::id())
                    ->findOrFail($id);

            }

            return view('turmas.alunos', compact('turma'));
        }
    
}