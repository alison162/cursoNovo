<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Models\Curso;

class AlunoController extends Controller
{
    public function cadastrarAluno()
    {
        return view('cadastrarAluno');
    }

    public function salvarAluno(Request $request)
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
        return view('cadastro');
    }
}
