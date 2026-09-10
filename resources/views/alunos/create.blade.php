@extends('layouts.app')

@section('title', 'Cadastrar Aluno')

@section('content')
<div class="py-12">
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">

        <h2 class="text-xl font-semibold text-gray-800 mb-6">Cadastrar Aluno</h2>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <form action="{{ route('alunos.store') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <x-input-label for="nome" value="Nome" />
                    <x-text-input type="text" id="nome" name="nome" class="mt-1 block w-full" :value="old('nome')" autofocus />
                    <x-input-error :messages="$errors->get('nome')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="idade" value="Idade" />
                    <x-text-input type="number" id="idade" name="idade" class="mt-1 block w-full" :value="old('idade')" />
                    <x-input-error :messages="$errors->get('idade')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="telefone" value="Telefone" />
                    <x-text-input type="text" id="telefone" name="telefone" class="mt-1 block w-full" :value="old('telefone')" />
                    <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="turma_id" value="Turma" />
                    <select id="turma_id" name="turma_id"
                            class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        <option value="">Selecione uma turma</option>
                        @foreach($turmas as $turma)
                            <option value="{{ $turma->id }}" @selected(old('turma_id') == $turma->id)>
                                {{ $turma->nome }}
                            </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('turma_id')" class="mt-2" />
                </div>

                <div class="flex items-center gap-4">
                    <x-primary-button>Cadastrar</x-primary-button>
                    <a href="{{ route('alunos.index') }}" class="text-sm text-gray-600 hover:text-gray-900">
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection