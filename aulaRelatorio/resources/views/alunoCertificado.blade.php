<!DOCTYPE html>
<html lang="en">
    <title>Certificado</title>
    <head>
        <style>
            div.page_break + div.page_break {
                page-break-before: always;
            }

            p.linha {
                    border-top: 2px solid #000;
            }
        </style>
    </head>

    <body>
        <?php
            $img_logo = public_path()."/img/logo.png";
            $img_aluno = public_path()."/img/alunop_ico.png";
        ?>

        @foreach ($alunos as $dados)
            <!-- Nova Paǵina: Documento PDF -->
            <div class="page_break"></div>
            <p class="linha"></p>
            <table width='100%' height='100%' border='0'>
                <!-- Cabeçalho -->
                <tr>
                    <td height='12%'>
                        <table width='100%' height='100%' border='0'>
                            <tr>
                                <td width='30%' align='center'>
                                    <img src="<?php echo $img_logo; ?>">
                                </td>
                                <td width='50%' align='rigth'>
                                    <h1>CERTIFICADO DE CONCLUSÃO<h1>
                                </td>
                                <td width='20%' align='left'>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- Linha -->
                <tr>
                    <td height='2%'><p class="linha"></p></td>
                </tr>
                <!-- Conteúdo -->
                <tr>
                    <td height='64%' align="center">
                        <h1>
                            O Instituto Federal do Paraná certifica que <br><br>
                            {{ $dados->nome }} <br><br>
                            cumpriu todos requisitos necessários para ser diplomado no curso <br><br>
                            {{ $dados->curso }}
                        <h1>
                    </td>
                </tr>
                <!-- Linha -->
                <tr>
                    <td height='2%'><p class="linha"></p></td>
                </tr>
                <!-- Rodapé -->
                <tr>
                    <td height='10%' align='center'>
                        <table width='100%' height='100%' border='0'>
                            <tr>
                                <td width='20%' align="left">
                                    <img src="<?php echo $img_aluno; ?>">
                                </td>
                                <td width='60%' align='center'>
                                    <b>
                                        Instituto Federal do Paraná - Campus Paranaguá
                                        <br>
                                        Rua Antônio Carlos Rodrigues, 453 - Porto Seguro, PR, 83215-750
                                    </b>
                                </td>
                                <td width='20%' align="right">
                                    <img src="<?php echo $img_aluno; ?>">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <p class="linha"></p>
        @endforeach
    </body>
</html>
