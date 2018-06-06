<?php

    session_start();

    include_once '../../global.php';

    class controleEvento {

        public static function index() {
            echo "<script>window.location='../view/viewEvento.php'</script>";
        }

        public static function rota() {

            $dados = explode("/", $_POST['acao']);

            if(strcmp($dados[0], "vincular") == 0) {
                echo "<script>window.location='../view/viewEventoVincular.php'</script>";
            }

        }

        public static function loadTabelaEventos() {

            $eventos = modeloEvento::getEventos();

            while($objEvento = $eventos->fetchObject()) {

            	echo "<tr>";
                    echo "<td>".$objEvento->id."</td>";
					echo "<td>".$objEvento->nome."</td>";
                    echo "<td>".$objEvento->data."</td>";
                    echo "<td>".$objEvento->carga_horaria." horas</td>";
                    echo "<td>".$objEvento->responsavel."</td>";

					echo "<td>";
						echo "<button type='submit' name='acao' value='alterar/".$objEvento->id."'>";
							echo "<span class='glyphicon glyphicon-pencil'></span>";
						echo "</button>";
						echo "&nbsp";
						echo "<button type='submit' name='acao' value='remover/".$objEvento->id."'>";
							echo "<span class='glyphicon glyphicon-remove'></span>";
						echo "</button>";
                        echo "&nbsp";
						echo "<button type='submit' name='acao' value='vincular/".$objEvento->id."'>";
							echo "<span class='glyphicon glyphicon-check'></span>";
						echo "</button>";
					echo "</td>";
				echo "</tr>";
    		}
    	}
    }
