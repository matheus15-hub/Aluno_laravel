@extends('layouts.app')

@section('title', 'Alunos')

@section('content')

    <h2>Lista de Alunos</h2>

    @if(count($alunos) > 0)

        <ul>
            @foreach($alunos as $aluno)
                <li>
                    {{ $aluno->nome }} -
                    {{ $aluno->idade }} anos

                    <a href="{{ route('alunos.show', $aluno->id) }}">
                        Ver
                    </a>
                </li>
            @endforeach
        </ul>

    @else

        <p>Nenhum aluno cadastrado.</p>

    @endif

@endsection