@extends('layouts.app')

@section('title', 'Alunos da Turma')

@section('content')
<div class="py-12">
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-semibold text-gray-800">Alunos da Turma: {{ $turma->nome }}</h2>
            <a href="{{ route('turmas.index') }}" class="text-sm text-gray-600 hover:text-gray-900">
                &larr; Voltar para turmas
            </a>
        </div>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            @if($turma->matriculas->count() > 0)
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aluno</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nota</th>
                            <th class="px-6 py-3"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($turma->matriculas as $matricula)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $matricula->aluno->nome }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $matricula->nota }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right">
                                    <form action="{{ route('matriculas.update', $matricula->id) }}" method="POST"
                                          class="flex items-center justify-end gap-2">
                                        @csrf
                                        @method('PUT')

                                        <label for="nota_{{ $matricula->id }}" class="sr-only">Nota</label>
                                        <input
                                            type="number"
                                            step="0.01"
                                            min="0"
                                            max="10"
                                            id="nota_{{ $matricula->id }}"
                                            name="nota"
                                            value="{{ $matricula->nota }}"
                                            class="w-20 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-sm"
                                        >

                                        <button type="submit"
                                                class="inline-flex items-center px-3 py-1.5 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                            Salvar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="p-6 text-sm text-gray-600">Nenhum aluno matriculado nesta turma.</p>
            @endif
        </div>
    </div>
</div>
@endsection