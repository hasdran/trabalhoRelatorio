@extends('principal')

@section('cabecalho')
<div id="m_texto">
        <img src="{{ url('/img/alunop_ico.png') }}" >
        &nbsp;Alunos Cadastrados
</div>
@stop

@section('conteudo')

@if (old('cadastrar'))
    <div class="alert alert-success">
        <strong> {{ old('nome') }} </strong>: Cadastrado com Sucesso!
    </div>
@endif

<div class='row'>
    <div class='col-sm-8' style="text-align: center">
        <a  href="{{ action('AlunoController@cadastrar') }}" type="button" class="btn btn-primary btn-block">
            <b>Cadastrar Novo Aluno</b>
        </a>
    </div>

    <div class='col-sm-3' style="text-align: center">
        <input type="text" list="alunos" class="form-control" autocomplete="on" placeholder="buscar">
        <datalist id="alunos">
            @foreach ($alunos as $dados)
                <option value="{{ $dados->nome }}">
            @endforeach
        </datalist>
    </div>

    <div class='col-sm-1' style="text-align: center">
        <button type="button" class="btn btn-default btn-block">
            <span class="glyphicon glyphicon-search"></span>
        </button>
    </div>
</div>
<br>
<div class='row'>
    <div class='col-sm-6' style="text-align: center">
        <a  href="{{ action('AlunoController@gerarRelatorio', 0) }}" target="_blank" type="button" class="btn btn-success btn-block">            
            <b>Relatório dos Alunos (PDF)</b>
            <span class="glyphicon glyphicon-file"></span>
        </a>
    </div>
    <div class='col-sm-6' style="text-align: center">
        <a  href="{{ action('AlunoController@gerarCertificado', 0) }}" target="_blank" type="button" class="btn btn-warning btn-block">            
            <b>Certificado dos Alunos (PDF)</b>
            <span class="glyphicon glyphicon-file"></span>
        </a>
    </div>
</div>

<br>
<table class='table table-striped'>
    <thead>
        <tr>
            <th>ID</th>
            <th>ALUNO</th>
            <th>CURSO</th>
            <th>TURMA</th>
            <th>EVENTOS</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($alunos as $dados)
        <tr>
            <td>{{ $dados->id }}</td>
            <td>{{ $dados->nome }}</td>
            <td>{{ $dados->curso }}</td>
            <td>{{ $dados->turma }}</td>
            <td>
                <a href="" disabled="true"><span class='glyphicon glyphicon-pencil'></span></a>
                &nbsp;
                <a href=""><span class='glyphicon glyphicon-remove'></span></a>
                &nbsp;
                <a href="{{ action('AlunoController@gerarRelatorio', $dados->id) }}" target="_blank"><span class="glyphicon glyphicon-file"></span></a>
                &nbsp;
                <a href="{{ action('AlunoController@gerarCertificado', $dados->id) }}" target="_blank"><span class='glyphicon glyphicon-certificate'></span></a>
            </td>
    @endforeach
    </tbody>
</table>

@stop
