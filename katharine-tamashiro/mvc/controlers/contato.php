<?php
    class Contato{
        public static function CreateView($pagina){
            require_once "./views/{$pagina}.php"; //assumindo que está na raíz, no index

            //Debug
            echo "<br>CreateView acionada dentro do controller {$pagina}.<br>";
        }
    }


?>