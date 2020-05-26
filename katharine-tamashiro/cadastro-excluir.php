<?php
    //ini_set('display_errors', 1); //mostra o erro
    include "include-db.php";

    // Resgate das informações  
    $id = $_POST["id"];
    $arrayID = implode(", ", $id);
    
    //foreach($id as $item){
        
        //Variáveis
        $sqlCadastroExcluir = "";
        $sqlCadastroExcluir .= "DELETE FROM cadastro_katharine_tamashiro ";
        //$sqlCadastroExcluir .= "WHERE id = :id";
        $sqlCadastroExcluir .= "WHERE id IN ($arrayID)";

        //Parametrização
        $statementCadastroExcluir = $conDB->prepare($sqlCadastroExcluir);

        if($statementCadastroExcluir !== false){ 
            $statementCadastroExcluir->bindParam(":id", $item, PDO::PARAM_STR);
            //$statementCadastroExcluir->bindParam(":array_id", $item, PDO::PARAM_STR);
            
            //Execução
            $statementCadastroExcluir->execute();
        }
        
        //Limpeza
        unset($statementCadastroExcluir);
    //}

    //Redirecionamento de página
    header("Location: cadastro-listagem2.php");
    
    
?>