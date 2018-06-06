<!DOCTYPE html>
<html lang="en">
    <title>Relatório</title>
    <head> </head>
    <body>
        <h1> Relatório de turmas do curso {{  $nomeCurso }}</h1>

        <table>
            <thead>
                <tr>
                    <th style="width : 60px">ID</th>
                    <th style="width : 450px">NOME</th>
                    <th style="width : 80px">ANO</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($turmas as $dados)
                <tr>
                    <td>{{ $dados->id }}</td>
                    <td>{{ $dados->nome }}</td>
                    <td>{{ $dados->ano }}</td>
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
