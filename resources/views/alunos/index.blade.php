@extends('layouts.app')

@section('title', 'Alunos')

@section('content')

    <h2>Lista de Alunos</h2>

    @if(count($alunos) > 0)

        <ul>
            @foreach($alunos as $aluno)
                <li>
                    Nome: {{ $aluno->nome }} |
                    Idade: {{ $aluno->idade }} |
                    Telefone: {{ $aluno->telefone }}
                </li>
            @endforeach
        </ul>

    @else

        <p>Nenhum aluno cadastrado.</p>

    @endif

@endsection