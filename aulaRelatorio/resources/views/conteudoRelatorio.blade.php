<!DOCTYPE html>
<html lang="en">
    <title>Relatório</title>
    <head> </head>
    <body>
        <h1> Relatório de Conteúdos e Atividades para a Disciplina {{$nomeDisciplina}} </h1>

        <h2>1º BIMESTRE</h2>

        @php($temconteudo=1)
        @foreach($conteudos as $dados)
            @if($dados->bimestre==1)
                @php($temconteudo=2)    
            @endif
        @endforeach

        @if($temconteudo==2)
            <h3>CONTEÚDOS</h3>
             <table>
                <thead>
                    <tr>
                        <th style="width : 60px">ID</th>
                        <th style="width : 60px">NOME</th>
                        <th style="width : 80px">DATA</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($conteudos as $dados)
                    @if($dados->bimestre==1)
                        <tr>
                            <td>{{ $dados->id }}</td>
                            <td>{{ $dados->nome }}</td>
                            <td>{{ $dados->data }}</td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        @endif

        @php($temconteudo=1)
        @foreach($atividades as $dados)
            @if($dados->bimestre==1)
                @php($temconteudo=2)
            @endif
        @endforeach

        @if($temconteudo==2)
            <H3>ATIVIDADES</H3>
            <table>
                <thead>
                    <tr>
                        <th style="width : 60px">ID</th>
                        <th style="width : 60px">NOME</th>
                        <th style="width : 80px">TIPO</th>
                        <th style="width : 60px">PRAZO</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($atividades as $dados)
                    @if($dados->bimestre==1)
                        <tr>
                            <td>{{ $dados->id }}</td>
                            <td>{{ $dados->nome }}</td>
                            <td>{{ $dados->tipo }}</td>
                            <td>{{ $dados->prazo }}</td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table> 
        @endif  

        <h2>2º BIMESTRE</h2>

        @php($temconteudo=1)
        @foreach($conteudos as $dados)
            @if($dados->bimestre==2)
                @php($temconteudo=2)
            @endif
        @endforeach

        @if($temconteudo==2)
            <h3>CONTEÚDOS</h3>
             <table>
                <thead>
                    <tr>
                        <th style="width : 60px">ID</th>
                        <th style="width : 60px">NOME</th>
                        <th style="width : 80px">DATA</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($conteudos as $dados)
                    @if($dados->bimestre==2)
                        <tr>
                            <td>{{ $dados->id }}</td>
                            <td>{{ $dados->nome }}</td>
                            <td>{{ $dados->data }}</td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        @endif

        @php($temconteudo=1)
        @foreach($atividades as $dados)
            @if($dados->bimestre==2)
                @php($temconteudo=2)
            @endif
        @endforeach

        @if($temconteudo==2)
            <H3>ATIVIDADES</H3>
            <table>
                <thead>
                    <tr>
                        <th style="width : 60px">ID</th>
                        <th style="width : 60px">NOME</th>
                        <th style="width : 80px">TIPO</th>
                        <th style="width : 60px">PRAZO</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($atividades as $dados)
                    @if($dados->bimestre==2)
                        <tr>
                            <td>{{ $dados->id }}</td>
                            <td>{{ $dados->nome }}</td>
                            <td>{{ $dados->tipo }}</td>
                            <td>{{ $dados->prazo }}</td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table> 
        @endif


        <h2>3º BIMESTRE</h2>

        @php($temconteudo=1)
        @foreach($conteudos as $dados)
            @if($dados->bimestre==3)
                @php($temconteudo=2)
            @endif
        @endforeach

        @if($temconteudo==2)
            <h3>CONTEÚDOS</h3>
             <table>
                <thead>
                    <tr>
                        <th style="width : 60px">ID</th>
                        <th style="width : 60px">NOME</th>
                        <th style="width : 80px">DATA</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($conteudos as $dados)
                    @if($dados->bimestre==3)
                        <tr>
                            <td>{{ $dados->id }}</td>
                            <td>{{ $dados->nome }}</td>
                            <td>{{ $dados->data }}</td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        @endif

        @php($temconteudo=1)
        @foreach($atividades as $dados)
            @if($dados->bimestre==3)
                @php($temconteudo=2)  
            @endif
        @endforeach

        @if($temconteudo==2)
            <H3>ATIVIDADES</H3>
            <table>
                <thead>
                    <tr>
                        <th style="width : 60px">ID</th>
                        <th style="width : 60px">NOME</th>
                        <th style="width : 80px">TIPO</th>
                        <th style="width : 60px">PRAZO</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($atividades as $dados)
                    @if($dados->bimestre==3)
                        <tr>
                            <td>{{ $dados->id }}</td>
                            <td>{{ $dados->nome }}</td>
                            <td>{{ $dados->tipo }}</td>
                            <td>{{ $dados->prazo }}</td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table> 
        @endif


        <h2>4º BIMESTRE</h2>

        @php($temconteudo=1)
        @foreach($conteudos as $dados)
            @if($dados->bimestre==4)
                @php($temconteudo=2)
            @endif
        @endforeach

        @if($temconteudo==2)
            <h3>CONTEÚDOS</h3>
             <table>
                <thead>
                    <tr>
                        <th style="width : 60px">ID</th>
                        <th style="width : 60px">NOME</th>
                        <th style="width : 80px">DATA</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($conteudos as $dados)
                    @if($dados->bimestre==4)
                        <tr>
                            <td>{{ $dados->id }}</td>
                            <td>{{ $dados->nome }}</td>
                            <td>{{ $dados->data }}</td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        @endif

        @php($temconteudo=1)
        @foreach($atividades as $dados)
            @if($dados->bimestre==4)
                @php($temconteudo=2)  
            @endif
        @endforeach

        @if($temconteudo==2)
            <H3>ATIVIDADES</H3>
            <table>
                <thead>
                    <tr>
                        <th style="width : 60px">ID</th>
                        <th style="width : 60px">NOME</th>
                        <th style="width : 80px">TIPO</th>
                        <th style="width : 60px">PRAZO</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($atividades as $dados)
                    @if($dados->bimestre==4)
                        <tr>
                            <td>{{ $dados->id }}</td>
                            <td>{{ $dados->nome }}</td>
                            <td>{{ $dados->tipo }}</td>
                            <td>{{ $dados->prazo }}</td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table> 
        @endif

        


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
