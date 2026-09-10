@extends('layouts.app')

@section('title', 'Editar Aluno')

@section('content')
<div class="py-12">
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">

        <h2 class="text-xl font-semibold text-gray-800 mb-6">Editar Aluno</h2>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <form action="{{ route('alunos.update', $aluno->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <x-input-label for="nome" value="Nome" />
                    <x-text-input type="text" id="nome" name="nome" class="mt-1 block w-full" :value="old('nome', $aluno->nome)" autofocus />
                    <x-input-error :messages="$errors->get('nome')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="idade" value="Idade" />
                    <x-text-input type="number" id="idade" name="idade" class="mt-1 block w-full" :value="old('idade', $aluno->idade)" />
                    <x-input-error :messages="$errors->get('idade')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="telefone" value="Telefone" />
                    <x-text-input type="text" id="telefone" name="telefone" class="mt-1 block w-full" :value="old('telefone', $aluno->telefone)" />
                    <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
                </div>

                <div class="flex items-center gap-4">
                    <x-primary-button>Salvar alterações</x-primary-button>
                    <a href="{{ route('alunos.show', $aluno->id) }}" class="text-sm text-gray-600 hover:text-gray-900">
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection