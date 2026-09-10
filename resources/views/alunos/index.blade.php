@extends('layouts.app')

@section('title', 'Alunos')

@section('content')
<div class="py-12">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-semibold text-gray-800">Lista de Alunos</h2>

            @can('create', \App\Models\Aluno::class)
                <a href="{{ route('alunos.create') }}"
                   class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    Cadastrar Aluno
                </a>
            @endcan
        </div>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            @if(count($alunos) > 0)
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Idade</th>
                            <th class="px-6 py-3"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($alunos as $aluno)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $aluno->nome }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $aluno->idade }} anos</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                    <a href="{{ route('alunos.show', $aluno->id) }}" class="text-indigo-600 hover:text-indigo-900 font-medium">
                                        Ver
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="p-6 text-sm text-gray-600">Nenhum aluno cadastrado.</p>
            @endif
        </div>
    </div>
</div>
@endsection