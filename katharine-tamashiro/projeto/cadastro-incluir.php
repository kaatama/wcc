<?php
    ini_set('display_errors', 1); //mostra o erro

    //Incluir banco
    include "include-db.php";

    // Resgate das informações
    $nome = $_POST["nome"];
    $data_nascimento = $_POST["data_nascimento"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $celular = $_POST["celular"];
    $renda = $_POST["renda"];
    $sexo = $_POST["sexo"];
    $renda_garantidor = $_POST["renda_garantidor"];

    //Variáveis
    $sqlCadastroGravacao = "";
    $sqlCadastroGravacao .= "INSERT INTO pravaler_katharine_tamashiro SET ";
    $sqlCadastroGravacao .= "nome = :nome, ";
    $sqlCadastroGravacao .= "data_nascimento = :data_nascimento, ";
    $sqlCadastroGravacao .= "cpf = :cpf, ";
    $sqlCadastroGravacao .= "renda = :renda, ";
    $sqlCadastroGravacao .= "sexo = :sexo, ";
    $sqlCadastroGravacao .= "celular = :celular, ";
    $sqlCadastroGravacao .= "email = :email, ";
    $sqlCadastroGravacao .= "renda_garantidor = :renda_garantidor ";

    //Parametrização
    $statementCadastroGravacao = $conDB->prepare($sqlCadastroGravacao);

    if($statementCadastroGravacao !== false){
        $statementCadastroGravacao->bindParam(":nome", $nome, PDO::PARAM_STR);
        $statementCadastroGravacao->bindParam(":data_nascimento", $data_nascimento, PDO::PARAM_STR);
        $statementCadastroGravacao->bindParam(":cpf", $cpf, PDO::PARAM_STR);
        $statementCadastroGravacao->bindParam(":renda", $renda, PDO::PARAM_STR);
        $statementCadastroGravacao->bindParam(":sexo", $sexo, PDO::PARAM_STR);
        $statementCadastroGravacao->bindParam(":celular", $celular, PDO::PARAM_STR);
        $statementCadastroGravacao->bindParam(":email", $email, PDO::PARAM_STR);
        $statementCadastroGravacao->bindParam(":renda_garantidor", $renda_garantidor, PDO::PARAM_STR);

        //Execução
        $statementCadastroGravacao->execute();
    }

    unset($statementCadastroGravacao);
    unset($sqlCadastroGravacao);
    $conDB = null;

    //Redirecionamento de página
    header("Location: cadastro.html");

?>
