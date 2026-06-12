<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Matricula;
class AlunoController extends Controller
{

    public function store(Request $request)
    {
        $aluno = new Aluno();

        $aluno->nome = $request->nome;
        $aluno->cpf = $request->cpf;
        $aluno->telefone = $request->telefone;
        $aluno->save();

        return redirect('/cadastrarAluno');
    }

    public function create()
    {
        return view('cadastrarAluno');
    }

    public function destroy($id)
    {
        $aluno = Aluno::find($id);

        if ($aluno->matricula()->count() > 0) {
            return redirect()->back()
                ->with('erro', 'Aluno possui matrícula.');
        }

        $aluno->delete();

        return redirect('/relatorioAlunos');
    }

    public function edit($id)
    {
        $aluno = Aluno::find($id);

        return view('editarAluno', compact('aluno'));
    }
    public function update(Request $request)
    {
        $aluno = Aluno::find($request->id);

        $aluno->nome = $request->nome;
        $aluno->cpf = $request->cpf;
        $aluno->telefone = $request->telefone;

        $aluno->save();

        return redirect('/relatorioAlunos');
    }

}
