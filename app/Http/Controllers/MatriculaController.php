<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Matricula;
use App\Models\Aluno;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
$dataDaMatricula = Carbon::now()->format('Y-m-d');
        $alunos = Aluno::orderBy('nome')->get();
        $cursos = Curso::where('status', '=', 'ativo')->orderBy('nome')->get();
        return view('cadastrarMatricula', compact('alunos', 'cursos', 'dataDaMatricula'));
    }

    public function destroy($id)
    {
        $matricula = Matricula::findOrFail($id);
        $matricula->delete();

        return redirect('/relatorioMatriculas');
    }
}
