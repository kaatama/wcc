<?php
    ini_set('display_errors', 1); //mostra o erro

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    require_once "../include-db.php";

    class apiCadastroEditar2{
        
        public function __construct(){
        }

        public function cadastroListagemEditar($id_, $nome_, $email_, $celular_){

            // Resgate das informações
            $id = $id_;
            $nome = $nome_;
            $email = $email_;
            $celular = $celular_;

            //Variáveis
            $sqlCadastroEditar = "";
            $sqlCadastroEditar .= "UPDATE cadastro_katharine_tamashiro SET ";
            $sqlCadastroEditar .= "nome = :nome, ";
            $sqlCadastroEditar .= "email = :email, ";
            $sqlCadastroEditar .= "celular = :celular ";
            $sqlCadastroEditar .= "WHERE id = :id";
            
            //Parametrização
            $statementCadastroEditar = $GLOBALS['conDB']->prepare($sqlCadastroEditar);
            if($statementCadastroEditar !== false){ 
                    $statementCadastroEditar->bindParam(":id", $id, PDO::PARAM_STR);
                    $statementCadastroEditar->bindParam(":nome", $nome, PDO::PARAM_STR);
                    $statementCadastroEditar->bindParam(":email", $email, PDO::PARAM_STR);
                    $statementCadastroEditar->bindParam(":celular", $celular, PDO::PARAM_STR);
                
                    //Execução
                $statementCadastroEditar->execute();
            }

        }
    }
                
    //Debug
    $token = $_GET["token"];
    $id = $_GET["id"];
    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $celular = $_GET["celular"];
    $apiCadastroEditar = new apiCadastroEditar2();
    $teste = $apiCadastroEditar->cadastroListagemEditar($id, $nome, $email, $celular);
    $jsonTeste = json_encode($teste);
    if ($token == "abc"){
        echo $jsonTeste;
    }
?>
