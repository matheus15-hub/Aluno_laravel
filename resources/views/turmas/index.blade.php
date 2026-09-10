@extends('layouts.app')

@section('title', 'Minhas Turmas')

@section('content')

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

    <h2>Minhas Turmas</h2>

    @if($turmas->count() > 0)

        <ul>
            @foreach($turmas as $turma)
                <li>
                    <a href="{{ route('turmas.alunos', $turma->id) }}">
                        {{ $turma->nome }}
                    </a>
                </li>
            @endforeach
        </ul>

    @else

        <p>Nenhuma turma encontrada.</p>

    @endif

@endsection