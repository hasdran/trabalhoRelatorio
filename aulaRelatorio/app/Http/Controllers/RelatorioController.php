<?php

namespace App\Http\Controllers;

use Request;
use App\ConteudoModel;
use App\CursoModel;
use App\DisciplinaModel;
use App\TurmaModel;
use App\AtividadeModel;

class RelatorioController extends Controller {

    public function listar() {
    	$disciplinas = DisciplinaModel::orderBy('nome')->get();
    	$cursos = CursoModel::orderBy('nome')->get();
        return view('relatorio')->with('cursos', $cursos)->with('disciplinas', $disciplinas);
    }

    public function gerarRelatorio() {

        $tipo = Request::input('tipo');
        switch ($tipo) {
            case '1':
                $arr = explode("-", Request::input('cursosTurma'));
                $id_curso = $arr[0];
                $nomeCurso = $arr[1];
                $turmas = TurmaModel::where('id_curso', '=', $id_curso)->get();
                return \PDF::loadView('turmaRelatorio', compact('turmas','nomeCurso'))
                    ->setPaper('A4', 'portrait')
                    ->stream('relatorio_turmas.pdf');
                // ->download('relatorio_alunos.pdf');
                break;
            case '2':
                $arr = explode("-", Request::input('cursosDisciplina'));
                $id_curso = $arr[0];
                $nomeCurso = $arr[1];
                $disciplinas = DisciplinaModel::where('id_curso', '=', $id_curso)->get();

                return \PDF::loadView('disciplinaRelatorio', compact('disciplinas','nomeCurso'))
                    ->setPaper('A4', 'portrait')
                    ->stream('relatorio_disciplinas.pdf');
                    // ->download('relatorio_alunos.pdf');
                break;
            case '3':
                $arr = explode("-", Request::input('disciplinas'));
                $id_disciplina = $arr[0];
                $nomeDisciplina = $arr[1];
                $conteudos = ConteudoModel::where('id_disciplina', '=', $id_disciplina)->get();
                $atividades = AtividadeModel::where('id_disciplina', '=', $id_disciplina)->get();

                return \PDF::loadView('conteudoRelatorio', compact('conteudos','atividades','nomeDisciplina'))
                    ->setPaper('A4', 'portrait')
                    ->stream('relatorio_conteudos.pdf');
                    // ->download('relatorio_alunos.pdf');
                break;            
        }
   }

}
