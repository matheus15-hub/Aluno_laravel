<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () {
    return 'Página sobre';
});

Route::get('/alunos', function () {
    return 'Página de alunos';
});

Route::get('/contato', function () {
    return 'Página de contato';
});