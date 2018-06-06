<!DOCTYPE html>
<html lang="en">
    <title>Relatório</title>
    <head> </head>
    <body>
        <h1> Relatório de Alunos </h1>

        <table>
            <thead>
                <tr>
                    <th style="width : 60px">ID</th>
                    <th style="width : 450px">ALUNO</th>
                    <th style="width : 80px">TURMA</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($alunos as $dados)
                <tr>
                    <td>{{ $dados->id }}</td>
                    <td>{{ $dados->nome }}</td>
                    <td>{{ $dados->turma }}</td>
            @endforeach
            </tbody>
        </table>

        <br>
        <div>
            <b>&copy;2018
                &nbsp;&nbsp;&raquo;&nbsp;&nbsp;
                Gil Eduardo de Andrade
                &nbsp;&nbsp;&raquo;&nbsp;&nbsp;
                versão 3.0
            </b>
        </div>
    </body>
</html>
