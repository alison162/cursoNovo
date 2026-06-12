<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\RelatorioController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('principal');



Route::get('/cadastrarAluno', [AlunoController::class, 'create'])->name('cadastrarAluno');
Route::post('/salvarAluno', [AlunoController::class, 'store'])->name('salvarAluno');
Route::get('/editarAluno/{id}', [AlunoController::class, 'edit'])->name('editarAluno');
Route::post('/updateAluno', [AlunoController::class, 'update'])->name('updateAluno');
Route::get('/excluirAluno/{id}', [AlunoController::class, 'destroy'])->name('excluirAluno');

Route::get('/cadastrarCurso', [CursoController::class, 'create'])->name('cadastrarCurso');
Route::post('/salvarCurso', [CursoController::class, 'store'])->name('salvarCurso');
Route::get('/editarCurso/{id}', [CursoController::class, 'edit'])->name('editarCurso');
Route::post('/updateCurso', [CursoController::class, 'update'])->name('updateCurso');
Route::get('/excluirCurso/{id}', [CursoController::class, 'destroy'])->name('excluirCurso');

Route::get('/cadastrarMatricula', [MatriculaController::class, 'create'])->name('cadastrarMatricula');
Route::post('/salvarMatricula', [MatriculaController::class, 'store'])->name('salvarMatricula');
Route::get('/editarMatricula/{id}', [MatriculaController::class, 'edit'])->name('editarMatricula');
Route::post('/updateMatricula', [MatriculaController::class, 'update'])->name('updateMatricula');
Route::get('/excluirMatricula/{id}', [MatriculaController::class, 'destroy'])->name('excluirMatricula');


Route::get('/relatorioMatriculas', [RelatorioController::class, 'relatorioMatriculas'])->name('relatorioMatriculas');
Route::get('/relatorioMatriculasEscolhas', [RelatorioController::class, 'relatorioMatriculasEscolhas'])->name('relatorioMatriculasEscolhas');
Route::get('/relatorioAlunos', [RelatorioController::class, 'relatorioAlunos'])->name('relatorioAlunos');
Route::get('/relatorioCursos', [RelatorioController::class, 'relatorioCursos'])->name('relatorioCursos');
Route::get('/verRelatorio', [RelatorioController::class, 'verRelatorio'])->name('verRelatorio');
