<!DOCTYPE html>
<html lang="en">
    <title>Relatório</title>
    <head> </head>
    <body>
        <h1> Relatório de Disciplinas do curso {{  $nomeCurso }}</h1>

        <table>
            <thead>
                <tr>
                    <th style="width : 30px">ID</th>
                    <th style="width : 70px">NOME</th>
                    <th style="width : 80px">ABREVIATURA</th>
                    <th style="width : 60px">CARGA HORÁRIA</th>
                    <th style="width : 60px">PERIODO</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($disciplinas as $dados)
                <tr>
                    <td>{{ $dados->id }}</td>
                    <td>{{ $dados->nome }}</td>
                    <td>{{ $dados->abreviatura }}</td>
                    <td>{{ $dados->carga_horaria }}</td>
                    <td>{{ $dados->periodo }}</td>
            @endforeach
            </tbody>
        </table>

        <br>
        <div>
            <b>&copy;2018
                &nbsp;&nbsp;&raquo;&nbsp;&nbsp;
                SETA
                &nbsp;&nbsp;&raquo;&nbsp;&nbsp;
                versão 3.0
            </b>
        </div>
    </body>
</html>
