<?php
    ini_set('display_errors', 1); //mostra o erro

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    require_once "../include-db.php";

    class apiCadastroListagem{
        
        public function __construct(){
        }

        public function cadastroListagemLer(){
            $idCadastro = "";

            $sqlCadastroLer = ""; 
            $sqlCadastroLer .= "SELECT ";  
            $sqlCadastroLer .= "id, ";  
            $sqlCadastroLer .= "nome, ";  
            $sqlCadastroLer .= "email, ";  
            $sqlCadastroLer .= "celular ";  
            $sqlCadastroLer .= "FROM cadastro_katharine_tamashiro ";

            //Parametrização
            $statementCadastro = $GLOBALS['conDB']->prepare($sqlCadastroLer);

            if($statementCadastro !== false){ //!== significa que o obj precisa ser qualquer coisa diferente de false, não necessariamente que é true
                //Parâmetros
                if ($idCadastro != ""){
                    $statementCadastro->bindParam(":id", $idCadastro, PDO::PARAM_STR);
                }
                //$statementCadastro->bindParam(":nomeSelecao", "João", PDO::PARAM_STR); 
                
                //Execução
                $statementCadastro->execute();
            }

            //Alocação dos resultados
            $resultadoCadastro = $statementCadastro->fetchAll();

            return $resultadoCadastro;

        }
    
    }

    //Debug
    //echo "idCadastro: " . $idCadastro . "<br>";
    $token = $_GET["token"];
    $apiCadastroListagem = new apiCadastroListagem();
    $teste = $apiCadastroListagem->cadastroListagemLer("abc");
    $jsonTeste = json_encode($teste);
    //echo "resultadoCadastro: ";
    //echo "<pre>";
    //var_dump($teste);
    //echo "</pre>";
    //echo "<br><br>";
    if ($token == "abc"){
        echo $jsonTeste;
    }
?>
