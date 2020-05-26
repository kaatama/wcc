<?php
    ini_set('display_errors', 1); //mostra o erro

    //Rotas definidas
    require_once "routes.php";

    function __autoload($class_name){
        if(file_exists('models/' . $class_name . '.php')){
            require_once 'models/' . $class_name . '.php';
        }
        else if(file_exists('controllers/' . $class_name . '.php'))
        {
            require_once 'controllers/' . $class_name . '.php';
        }
    }
    
    //require_once "./controlers/sobre.php"; //importação
    //require_once "models/route.php";

    if (isset($_GET["url"])){ //serve para deixar a exibição de erro menos rígida (quando utilizamos ini_set('display_errors',1))
        //Debug
       /* echo "<br>";
        echo "url (variável do redirecionamento)" . $_GET["url"];
        echo "<br>";*/
    }
?>