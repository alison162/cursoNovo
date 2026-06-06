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
        $consulta = Matricula::with('aluno', 'curso')->get();
        return view('relatorioMatricula', ['consulta' => $consulta]);
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
 
}
?>