<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Matricula;

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
        if (Matricula::where('curso_id', $id)->exists()) {
            return redirect('/relatorioCursos')
                ->with('erro', 'Não é possível excluir este curso, pois existem matrículas vinculadas a ele.');
        }

        $curso->delete();

        return redirect('/relatorioCursos');
    }

    public function edit($id)
    {
        $curso = Curso::find($id);

        return view('editarCurso', ['curso' => $curso
        ]);
    }
    public function update(Request $request)
    {
        $curso = Curso::find($request->id);

        $curso->nome = $request->nome;
        $curso->cargaHoraria = $request->cargaHoraria;
        $curso->status = $request->status;

        $curso->save();

        return redirect('/relatorioCursos');
    }

}
