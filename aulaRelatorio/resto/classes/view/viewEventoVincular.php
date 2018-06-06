<?php

    include_once '../../global.php';

    if( !empty($_POST['form_submit']) ) {
        controleEvento::rota();
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <link rel="icon" href="img/favicon.ico">
    <title>SiGer</title>

    <!-- Bootstrap URL - CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="../../recursos/css/theme.css" rel="stylesheet">
    <!-- Ajax Script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.js" integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script type="text/javascript">

    </script>

    <style>
        .redtext { color: red; }
        .greentext { color :green; }
    </style>

    <script type="text/javascript">

        // Eventos da Página
        $(document).ready(function() {

            $("input[type=checkbox]").on('change', function () {

                event.preventDefault();
                var check = $(this);
                var dados = check.attr('name').split('_');
                var label = "lb_" + dados[1];

                // Verifica se o checkbox que gerou o evento está selecionado
                if(check.prop('checked') == true) {
                    $('#'+label).text('SIM');
                    document.getElementById(label).style.color = "green";
                }
                else {
                    $('#'+label).text('NÃO');
                    document.getElementById(label).style.color = "red";
                }
            });
        });

    </script>

  </head>

  <body role="document">
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">[ SisGer ] Sistema Gerenciador de Certificado</a>
        </div>
	<div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
              <li class="active">
                      <a href="viewEvento.php"> Eventos </a>
              </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

        <div class="page-header">
            <h2 class="form-signin-heading">
                <div id="m_texto"> Vincular Alunos ao Evento </div>
                <h5>&nbsp;&nbsp; <i><?=$_GET['evento']?></i></h5>
            </h2>
        </div>

        <form class="form" method="post" action="viewEventoVincular.php">
            <input TYPE="hidden" NAME="form_submit" VALUE="OK">

            <button type="submit" name="acao" value="concluir/id" class="btn btn-success btn-block">
                <b>Confirmar Alunos Vinculados</b>
            </button>

            <br>
            <table class='table table-striped'>
                <thead>
                    <tr>
                        <th>VINCULADO</th>
                        <th>ALUNO</th>
                        <th>CURSO</th>
                        <th>TURMA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        controleAluno::loadTabelaVincularAlunos();
                    ?>
                </tbody>
            </table>
            <div id="div_update"></div>
        </form>

    	<div class="page-header">
    		<b>&copy;2017&nbsp;&nbsp;&raquo;&nbsp;&nbsp; Gil Eduardo de Andrade</b>
    	</div>
    
    </div>
  </body>
</html>
