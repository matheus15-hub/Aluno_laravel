<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TurmaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return 'Área do administrador';
    })->name('admin');
});

Route::middleware(['auth', 'role:professor'])->group(function () {
    Route::get('/professor', function () {
        return 'Área do professor';
    })->name('professor');
});

Route::middleware('auth')->group(function () {

    Route::get('/turmas', [TurmaController::class, 'index'])
        ->name('turmas.index');

    Route::get('/turmas/{id}/alunos', [TurmaController::class, 'alunos'])
        ->name('turmas.alunos');

    Route::put('/matriculas/{id}', [MatriculaController::class, 'update'])
        ->name('matriculas.update');

    Route::resource('/alunos', AlunoController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});

require __DIR__.'/auth.php';