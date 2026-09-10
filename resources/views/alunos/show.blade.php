@extends('layouts.app')

@section('title', 'Detalhes do Aluno')

@section('content')
<div class="py-12">
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">

        <h2 class="text-xl font-semibold text-gray-800 mb-6">Detalhes do Aluno</h2>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-4">
            <div>
                <span class="block text-xs font-medium text-gray-500 uppercase tracking-wide">Nome</span>
                <span class="text-gray-900">{{ $aluno->nome }}</span>
            </div>

            <div>
                <span class="block text-xs font-medium text-gray-500 uppercase tracking-wide">Idade</span>
                <span class="text-gray-900">{{ $aluno->idade }}</span>
            </div>

            <div>
                <span class="block text-xs font-medium text-gray-500 uppercase tracking-wide">Telefone</span>
                <span class="text-gray-900">{{ $aluno->telefone }}</span>
            </div>

            <div class="flex items-center gap-4 pt-4 border-t border-gray-100">
                @can('update', $aluno)
                    <a href="{{ route('alunos.edit', $aluno->id) }}"
                       class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        Editar
                    </a>
                @endcan

                @can('delete', $aluno)
                    <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST"
                          onsubmit="return confirm('Tem certeza que deseja excluir este aluno?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Excluir
                        </button>
                    </form>
                @endcan

                <a href="{{ route('alunos.index') }}" class="text-sm text-gray-600 hover:text-gray-900 ml-auto">
                    Voltar para lista
                </a>
            </div>
        </div>
    </div>
</div>
@endsection