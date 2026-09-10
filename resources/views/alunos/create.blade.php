@extends('layouts.app')

@section('title', 'Cadastrar Aluno')

@section('content')

    <h2>Cadastrar Aluno</h2>

    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf

        <div>
            <label for="nome">Nome:</label>
            <input
                type="text"
                id="nome"
                name="nome"
                value="{{ old('nome') }}"
            >

            @error('nome')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label for="idade">Idade:</label>
            <input
                type="number"
                id="idade"
                name="idade"
                value="{{ old('idade') }}"
            >

            @error('idade')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label for="telefone">Telefone:</label>
            <input
                type="text"
                id="telefone"
                name="telefone"
                value="{{ old('telefone') }}"
            >

            @error('telefone')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label for="turma_id">Turma:</label>

            <select id="turma_id" name="turma_id">
                <option value="">Selecione uma turma</option>

                @foreach($turmas as $turma)
                    <option
                        value="{{ $turma->id }}"
                        {{ old('turma_id') == $turma->id ? 'selected' : '' }}
                    >
                        {{ $turma->nome }}
                    </option>
                @endforeach
            </select>

            @error('turma_id')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <button type="submit">
            Cadastrar
        </button>
    </form>

@endsection