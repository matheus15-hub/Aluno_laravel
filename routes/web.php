<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () {
    return 'Página sobre';
});

Route::get('/contato', function () {
    return 'Página de contato';
});

Route::get('/produto/{id}', function ($id) {
    return 'Produto: ' . $id;
});

Route::get('/categoria/{id}', function ($id) {
    return 'Categoria: ' . $id;
});

Route::get('/usuario/{id}', function ($id) {
    return 'Usuário: ' . $id;
});

Route::resource('/alunos', AlunoController::class);