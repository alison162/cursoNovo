<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Curso;

class CursoController extends Controller
{
    public function cadastrarCurso()
    {
        return view('cadastrarCurso');
    }

    public function salvarCurso(Request $request)
    {
        $curso = new Curso();
        $curso->nome = $request->nome;
        $curso->cargaHoraria = $request->cargaHoraria;
        $curso->status = $request->status;
        $curso->save();

        return redirect('/cadastrarCurso');
    }
}
