<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Matricula;

class RelatorioController extends Controller
{
    public function relatorioMatriculas()
    {
        $cursos = Curso::all();
        return view('relatorioMatriculas', compact('cursos'));
    }

    public function relatorioAlunos()
    {
        $consulta = Aluno::all();
        return view('relatorioAluno', ['consulta' => $consulta]);
    }

    public function relatorioCursos()
    {
        $consulta = Curso::all();
        return view('relatorioCurso', ['consulta' => $consulta]);
    }

    public function verRelatorio()
    {
        return view('verRelatorio');
    }

    public function relatorioMatriculasEscolhas(Request $request)
    {
        $curso = Curso::findOrFail($request->curso_id);
    
        $matriculas = Matricula::where('curso_id', $request->curso_id)
            ->with('aluno')
            ->get();
    
        return view('relatorioMatriculasFiltrado', compact('curso', 'matriculas'));
    }

 
}
?>