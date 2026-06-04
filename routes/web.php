
<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\MatriculaController;



use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/cadastrarAluno',[AlunoController::class,'create'])->name('cadastrarAluno');
Route::post('/salvarAluno', [AlunoController::class, 'store'])->name('salvarAluno');

Route::get('/cadastrarCurso',[CursoController::class,'create'])->name('cadastrarCurso');
Route::post('/salvarCurso', [CursoController::class, 'store'])->name('salvarCurso');

Route::get('/cadastrarMatricula',[MatriculaController::class,'create'])->name('cadastrarMatricula');
Route::post('/salvarMatricula', [MatriculaController::class, 'store'])->name('salvarMatricula');