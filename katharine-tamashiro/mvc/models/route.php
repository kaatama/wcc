<?php 
    class Route {

        public static $validRoutes = array();

        public static function set($route, $function){
            //$this->validRouotes[] = $route;
            self::$validRoutes[] = $route;

            if($_GET["url"] == $route){

                echo "route (dentro da função set): " . $route . "<br>";
                //Debug
                //print_r($route);

                //Execução da função passada por parâmetro
                $function->__invoke();
            }
            
        }
    }

?>