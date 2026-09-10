@extends('layouts.app')

@section('title', 'Minhas Turmas')

@section('content')

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