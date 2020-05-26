<?php
    ini_set('display_errors', 1); //mostra o erro

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    require_once "../include-db.php";

    class apiCadastroDetalhes1{
        
        public function __construct(){
        }

        public function cadastroListagemDetalhes($id){
            $idCadastro = $id;

            $sqlCadastroLer = ""; 
            $sqlCadastroLer .= "SELECT ";  
            $sqlCadastroLer .= "id, ";  
            $sqlCadastroLer .= "nome, ";  
            $sqlCadastroLer .= "email, ";  
            $sqlCadastroLer .= "celular ";  
            $sqlCadastroLer .= "FROM cadastro_katharine_tamashiro ";
            if ($idCadastro != ""){
                $sqlCadastroLer .= "WHERE id = :id";
             }else {
                 $sqlCadastroLer .= "WHERE id = 0";
                 //exit("Não existem registros"); //Desvantagem desse método é que a mensagem aparecerá numa pág em branco, sem layout
             }   

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
    $token = $_GET["token"];
    $id = $_GET["id"];
    $apiCadastroDetalhes = new apiCadastroDetalhes1();
    $teste = $apiCadastroDetalhes->cadastroListagemDetalhes($id);
    $jsonTeste = json_encode($teste);
    if ($token == "abc"){
        echo $jsonTeste;
    }
?>
