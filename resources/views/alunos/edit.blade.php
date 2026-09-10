@extends('layouts.app')

@section('title', 'Editar Aluno')

@section('content')

    <h2>Editar Aluno</h2>

    <form action="{{ route('alunos.update', $aluno->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nome">Nome:</label>
            <input
                type="text"
                id="nome"
                name="nome"
                value="{{ old('nome', $aluno->nome) }}"
            >
        </div>

        <br>

        <div>
            <label for="idade">Idade:</label>
            <input
                type="number"
                id="idade"
                name="idade"
                value="{{ old('idade', $aluno->idade) }}"
            >
        </div>

        <br>

        <div>
            <label for="telefone">Telefone:</label>
            <input
                type="text"
                id="telefone"
                name="telefone"
                value="{{ old('telefone', $aluno->telefone) }}"
            >
        </div>

        <br>

        <button type="submit">
            Salvar alterações
        </button>
    </form>

    <br>

    <a href="{{ route('alunos.show', $aluno->id) }}">
        Cancelar
    </a>

@endsection