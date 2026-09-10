@extends('layouts.app')

@section('title', 'Alunos da Turma')

@section('content')

    <h2>Alunos da Turma: {{ $turma->nome }}</h2>

    @if($turma->matriculas->count() > 0)

        <ul>
            @foreach($turma->matriculas as $matricula)

                <li>
                    {{ $matricula->aluno->nome }}

                    <form action="{{ route('matriculas.update', $matricula->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <label for="nota_{{ $matricula->id }}">
                            Nota:
                        </label>

                        <input
                            type="number"
                            step="0.01"
                            min="0"
                            max="10"
                            id="nota_{{ $matricula->id }}"
                            name="nota"
                            value="{{ $matricula->nota }}"
                        >

                        <button type="submit">
                            Salvar nota
                        </button>
                    </form>
                </li>

            @endforeach
        </ul>

    @else

        <p>Nenhum aluno matriculado nesta turma.</p>

    @endif

    <br>

    <a href="{{ route('turmas.index') }}">
        Voltar para turmas
    </a>

@endsection