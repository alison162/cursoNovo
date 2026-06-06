<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Curso;

class CursoController extends Controller
{
    public function cadastrarMatricula()
    {
        $consulta = Matricula::all();

        return view('cadastrarMatricula', ['consulta' => $consulta]);
    }


    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->nome = $request->nome;
        $curso->cargaHoraria = $request->cargaHoraria;
        $curso->status = $request->status;
        $curso->save();

        return redirect('/cadastrarCurso');
    }
    public function create()
    {
        return view('cadastrarCurso');
    }

    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();

        return redirect('/relatorioCursos');
    }
}
