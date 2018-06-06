<?php

namespace App\Http\Controllers;

use Request;
use App\AlunoModel;

class AlunoController extends Controller {

    public function listar() {

        $alunos = AlunoModel::all();
        return view('aluno')->with('alunos', $alunos);
    }

    public function cadastrar() {

        return view('alunoCadastrar');
    }

    public function editar() {
    }

    public function remover() {
    }

    public function gerarRelatorio($id) {

        // Todos os Alunos
        if($id == 0) { $alunos = AlunoModel::all(); }
        // Um Aluno Específico
        else { $alunos = AlunoModel::where('id', '=', $id)->get(); }

        return \PDF::loadView('alunoRelatorio', compact('alunos'))
                ->setPaper('A4', 'portrait')
                ->stream('relatorio_alunos.pdf');
                // ->download('relatorio_alunos.pdf');
    }

    public function gerarCertificado($id) {

        // Todos os Alunos
        if($id == 0) { $alunos = AlunoModel::all(); }
        // Um Aluno Específico
        else { $alunos = AlunoModel::where('id', '=', $id)->get(); }

        return \PDF::loadView('alunoCertificado', compact('alunos'))
                ->setPaper('A4', 'landscape')
                ->stream('certificado_alunos.pdf');
    }

    public function salvar($id) {

        // INSERT
        if($id == 0) {
            $objAlunoModel = new AlunoModel();
            $objAlunoModel->nome = mb_strtoupper(Request::input('nome'), 'UTF-8');
            $objAlunoModel->curso = mb_strtoupper(Request::input('curso'), 'UTF-8');
            $objAlunoModel->turma = mb_strtoupper(Request::input('turma'), 'UTF-8');
            $objAlunoModel->save();
        }

        return redirect()->action('AlunoController@listar')->withInput();
    }
}
