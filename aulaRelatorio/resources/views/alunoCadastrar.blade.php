@extends('principal')

@section('cabecalho')
<div>
        <a href="/aluno">
            <img src=" {{ url('/img/alunop_ico.png') }}" >
        </a>
        &nbsp;Cadastrar Novo Curso
</div>
@stop

@section('conteudo')

<form action="{{ action('AlunoController@salvar', 0) }}" method="POST">
    <input type ="hidden" name="_token" value="{{{ csrf_token() }}}">
    <input type ="hidden" name="cadastrar" value="C">

    <div class="row">
        <div class="col-sm-12">
            <label>Nome: </label>
            <input type="text" name="nome" class="form-control" required>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-6">
            <label>Curso: </label>
            <select name="curso" class="form-control" required>
                <option selected="true" disabled="true"></option>
                <option>EMI - Técnico em Informática</option>
                <option>Tecnólogo em Análise e Desenvolvimento</option>
            <select>
        </div>
        <div class="col-sm-6">
            <label>Turma: </label>
            <select name="turma" class="form-control" required>
                <option selected="true" disabled="true"></option>
                <option>INFO 15</option>
                <option>INFO 16</option>
                <option>INFO 17</option>
                <option>INFO 18</option>
                <option>TADS 16</option>
                <option>TADS 17</option>
                <option>TADS 18</option>
            <select>
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-success btn-block">Salvar</button>
</form>
@stop
