@extends('layouts.app')

@section('title', 'Minhas Turmas')

@section('content')
<div class="py-12">
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

        <h2 class="text-xl font-semibold text-gray-800 mb-6">Minhas Turmas</h2>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            @if($turmas->count() > 0)
                <ul class="divide-y divide-gray-200">
                    @foreach($turmas as $turma)
                        <li>
                            <a href="{{ route('turmas.alunos', $turma->id) }}"
                               class="flex items-center justify-between px-6 py-4 hover:bg-gray-50 transition ease-in-out duration-150">
                                <span class="text-sm font-medium text-gray-900">{{ $turma->nome }}</span>
                                <span class="text-indigo-600 text-sm">Ver alunos &rarr;</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="p-6 text-sm text-gray-600">Nenhuma turma encontrada.</p>
            @endif
        </div>
    </div>
</div>
@endsection