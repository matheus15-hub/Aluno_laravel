<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

Route::get('/', function () {
    return view('welcome');
});

// ATV 1
Route::get('/sobre', function () {
    return 'Página sobre';
});

Route::get('/alunos', function () {
    return 'Página de alunos';
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
