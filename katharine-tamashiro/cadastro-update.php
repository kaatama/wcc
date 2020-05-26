<?php
    //ini_set('display_errors', 1); //mostra o erro
    include "include-db.php";

    // Resgate das informações
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $celular = $_POST["celular"];

    //Variáveis
    $sqlCadastroEditar = "";
    $sqlCadastroEditar .= "UPDATE cadastro_katharine_tamashiro SET ";
    $sqlCadastroEditar .= "nome = :nome, ";
    $sqlCadastroEditar .= "email = :email, ";
    $sqlCadastroEditar .= "celular = :celular ";
    $sqlCadastroEditar .= "WHERE id = :id";

    //Parametrização
    $statementCadastroEditar = $conDB->prepare($sqlCadastroEditar);

    if($statementCadastroEditar !== false){ 
        $statementCadastroEditar->bindParam(":id", $id, PDO::PARAM_STR);
        $statementCadastroEditar->bindParam(":nome", $nome, PDO::PARAM_STR);
        $statementCadastroEditar->bindParam(":email", $email, PDO::PARAM_STR);
        $statementCadastroEditar->bindParam(":celular", $celular, PDO::PARAM_STR);
         
        //Execução
        $statementCadastroEditar->execute();
    }
    
    //Limpeza
    $conDB = null;

    //Redirecionamento de página
    header("Location: cadastro-listagem2.php");
?>