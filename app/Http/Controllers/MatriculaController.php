<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Matricula;
use App\Models\Aluno;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{

    public function store(Request $request)
    {
        $matricula = new Matricula();

        $matricula->dataDaMatricula = $request->dataDaMatricula;
        $matricula->aluno_id = $request->aluno_id;
        $matricula->curso_id = $request->curso_id;
        $matricula->save();

        return redirect('/cadastrarMatricula');
    }

    public function create()
    {
        $alunos = Aluno::orderBy('nome')->get();
        $cursos = Curso::orderBy('nome')->get();
        return view('cadastrarMatricula', compact('alunos', 'cursos'));
    }
}
