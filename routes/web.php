
<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\RelatorioController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/cadastrarAluno',[AlunoController::class,'create'])->name('cadastrarAluno');
Route::post('/salvarAluno', [AlunoController::class, 'store'])->name('salvarAluno');
Route::get('/editarAluno',[AlunoController::class,'create'])->name('editarAluno');
Route::get('/excluirAluno/{id}', [AlunoController::class, 'destroy'])->name('excluirAluno');

Route::get('/cadastrarCurso',[CursoController::class,'create'])->name('cadastrarCurso');
Route::post('/salvarCurso', [CursoController::class, 'store'])->name('salvarCurso');
Route::get('/editarCurso',[CursoController::class,'create'])->name('editarCurso');
Route::get('/excluirCurso/{id}', [CursoController::class, 'destroy'])->name('excluirCurso');

Route::get('/cadastrarMatricula',[MatriculaController::class,'create'])->name('cadastrarMatricula');
Route::post('/salvarMatricula', [MatriculaController::class, 'store'])->name('salvarMatricula');
Route::get('/editarMatricula',[MatriculaController::class,'create'])->name('editarMatricula');
Route::get('/excluirMatricula/{id}', [MatriculaController::class, 'destroy'])->name('excluirMatricula');


Route::get('/relatorioMatriculas',[RelatorioController::class, 'relatorioMatriculas'])->name('relatorioMatriculas');
Route::get('/relatorioAlunos',[RelatorioController::class, 'relatorioAlunos'])->name('relatorioAlunos');
Route::get('/relatorioCursos',[RelatorioController::class, 'relatorioCursos'])->name('relatorioCursos');
Route::get('/verRelatorio',[RelatorioController::class, 'verRelatorio'])->name('verRelatorio');
