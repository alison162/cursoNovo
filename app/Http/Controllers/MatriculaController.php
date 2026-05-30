<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Matricula;
use App\Models\Aluno;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public function cadastrarMatricula()
    {
        $alunos = Aluno::all();
        $cursos = Curso::all();

        return view('cadastrarMatricula',['alunos'  => $alunos, 'cursos' => $cursos]);
    }

    public function salvarMatricula(Request $request)
    {
        $matricula = new Matricula();

        $matricula->dataDaMatricula = $request->dataDaMatricula;
        $matricula->aluno_id = $request->aluno_id;
        $matricula->curso_id = $request->curso_id;
        $matricula->save();

        return redirect('/cadastrarMatricula');
    }
}
