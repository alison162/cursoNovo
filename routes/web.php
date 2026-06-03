<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/cadastrarAluno',[AlunoController::class,'create'])->name('cadastrarAluno');

Route::get('/cadastrarCurso',[CursoController::class,'create'])->name('cadastrarCurso');

Route::get('/cadastrarMatricula',[MatriculaController::class,'create'])->name('cadastrarMatricula');