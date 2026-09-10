@extends('layouts.app')

@section('title', 'Detalhes do Aluno')

@section('content')

    <h2>Detalhes do Aluno</h2>

    <p><strong>Nome:</strong> {{ $aluno->nome }}</p>
    <p><strong>Idade:</strong> {{ $aluno->idade }}</p>
    <p><strong>Telefone:</strong> {{ $aluno->telefone }}</p>

    <br>

    @can('update', $aluno)
        <a href="{{ route('alunos.edit', $aluno->id) }}">
            Editar
        </a>
    @endcan

    @can('delete', $aluno)
        <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')

            <button type="submit">
                Excluir
            </button>
        </form>
    @endcan

    <br><br>

    <a href="{{ route('alunos.index') }}">
        Voltar para lista
    </a>

@endsection