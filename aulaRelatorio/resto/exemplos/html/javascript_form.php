<?php

    if( !empty($_POST['form_submit']) ) {

        $dados = "";
        foreach($_POST as $elemento => $valor) {
            $dados .= "($elemento: $valor) ";
        }

        echo "<script>alert('".$dados."')</script>";
    }

    $carros = array("1" => "Lamborghini diablo",
        "2" => "Porche Cayman",
        "3" => "Ferrari California");
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.js" integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA=" crossorigin="anonymous"></script>
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

                }
                else {
                    $('#'+label).text('NÃO');
                }
            });
        });

    </script>

  </head>

  <body role="document">

      <form class="form" method="post" action="javascript_form.php">
          <input TYPE="hidden" NAME="form_submit" VALUE="OK">
          <?php

                foreach($carros as $id => $nome) {

                    echo "<input type='checkbox' class='form-check-input' name='ck_$id'  id='ck_$id'>";
                    echo "&nbsp;&nbsp;";
                    echo "<label id='lb_$id' style='text-color: red'>NÃO</label>";
                    echo "&nbsp;&nbsp;";
                    echo "<b>$nome</b><br>";
                }

          ?>
          <br>
          <button type="submit">
              <b>Submeter</b>
          </button>
    </form>

  </body>
</html>
