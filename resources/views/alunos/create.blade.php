@extends('layouts.app')

@section('title', 'Cadastrar Aluno')

@section('content')

    <h2>Cadastrar Aluno</h2>

    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf

        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome">
             @error('nome')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade">
             @error('idade')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone">
            @error('telefone')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>
    
        <button type="submit">Cadastrar</button>
    </form>

@endsection