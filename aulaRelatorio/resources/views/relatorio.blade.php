@extends('principal')

@section('cabecalho')
<div id="m_texto">
        <img src=" {{ url('/img/relatoriop_ico.png') }}" >
        &nbsp;Relatórios
@stop

@section('conteudo')

<form action="{{ action('RelatorioController@gerarRelatorio') }}" method="POST">
    <input type ="hidden" name="_token" value="{{{ csrf_token() }}}">

    <h3><b>Relatório de Turmas por Curso</b></h3>

    <div class="row">

        <div class='col-sm-6' style="text-align: center">


          <input type="text" list="cursosTurma" name="cursosTurma" class="form-control" autocomplete="on" placeholder="Selecione o Curso">
        	<datalist id="cursosTurma">
            @foreach ($cursos as $dados)
                <option value="{{$dados->id}}-{{$dados->nome}}">
            @endforeach
        	</datalist>

            <!--
            <select name="cursosTurma" class="form-control">
                @foreach ($cursos as $dados)
                    <option>{{$dados->id}}-{{$dados->nome}}</option>
                @endforeach
            </select>
            -->

    	</div>

        <div class="col-sm-6">
           <button type="submit" name="tipo" value="1" class="btn btn-success btn-block">Gerar Relatório PDF</button>
        </div>

    </div>

    <h3><b>Relatório de Disciplinas por Curso</b></h3>

    <div class="row">
        <div class='col-sm-6' style="text-align: center">
        	<input type="text" list="cursosDisciplina" name="cursosDisciplina" class="form-control" autocomplete="on" placeholder="Selecione o Curso">
        	<datalist id="cursosDisciplina">
            @foreach ($cursos as $dados)
                <option value="{{$dados->id}}-{{$dados->nome}}">
            @endforeach
        	</datalist>
            <!--
            <select name="cursosDisciplina" class="form-control">
                @foreach ($cursos as $dados)
                    <option>{{$dados->id}}-{{$dados->nome}}</option>
                @endforeach
            </select>
            -->
    	</div>
        <div class="col-sm-6">
           <button type="submit" name="tipo" value="2"  class="btn btn-success btn-block">Gerar Relatório PDF</button>
        </div>
    </div>

    <h3><b>Relatório de Conteúdos por Disciplina</b></h3>

    <div class="row">

        <div class='col-sm-6' style="text-align: center">
        	<input type="text" name="disciplinas" list="disciplinas" class="form-control" autocomplete="on" placeholder="Selecione a Disciplina">
        	<datalist id="disciplinas">
            @foreach ($disciplinas as $dados)
                <option value="{{$dados->id}}-{{$dados->nome}}">
            @endforeach
        	</datalist>
    	</div>

        <div class="col-sm-6">
           <button type="submit" name="tipo" value="3" class="btn btn-success btn-block">Gerar Relatório PDF</button>
        </div>

    </div>

</form>
@stop
