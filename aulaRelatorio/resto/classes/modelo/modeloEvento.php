<?php

    include_once '../../global.php';

    class modeloEvento extends BD {

        public static $tabela = 'tb_evento';

        public static function getEventos() {

            return parent::selectAll(self::$tabela, "ORDER BY nome");
        }
    }
?>
