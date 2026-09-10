@extends('layouts.app')

@section('title', 'Alunos da Turma')

@section('content')

    <h2>Alunos da Turma: {{ $turma->nome }}</h2>

    @if($turma->matriculas->count() > 0)

        <ul>
            @foreach($turma->matriculas as $matricula)
                <li>
                    {{ $matricula->aluno->nome }}
                    - Nota: {{ $matricula->nota }}
                </li>
            @endforeach
        </ul>

    @else

        <p>Nenhum aluno matriculado nesta turma.</p>

    @endif

@endsection