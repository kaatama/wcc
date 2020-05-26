<?php
    ini_set('display_errors', 1); //mostra o erro
    
    //Incluir banco
    include "include-db.php";

    // Resgate das informações
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $celular = $_POST["celular"];
    /*$data_nasc = $_POST["data_nasc"];
    $cpf = $_POST["cpf"];
    $rg = $_POST["rg"];
    $renda = $_POST["renda"];
    $sexo = $_POST["sexo"];
    $cep = $_POST["cep"];
    $endereco = $_POST["endereco"];
    $complemento = $_POST["complemento"];
    $bairro = $_POST["bairro"];
    $estado = $_POST["estado"];
    $cidade = $_POST["cidade"];
    $garantidor_nome = $_POST["garantidor_nome"];
    $garantidor_renda = $_POST["garantidor_renda"];*/

    //Variáveis
    $sqlCadastroGravacao = "";

    //dados do projeto
    /*$sqlCadastroGravacao .= "INSERT INTO cadastro_katharine_tamashiro SET ";
    $sqlCadastroGravacao .= "nome = :nome, data_nasc = '$data_nasc', ";
    $sqlCadastroGravacao .= "cpf = '$cpf', rg = '$rg', renda = '$renda', sexo = '$sexo', ";
    $sqlCadastroGravacao .= "celular = '$celular', email = '$email', cep = '$cep', ";
    $sqlCadastroGravacao .= "endereco = '$endereco', complemento = '$complemento', ";
    $sqlCadastroGravacao .= "bairro = '$bairro', estado = '$estado', cidade = '$cidade', ";
    $sqlCadastroGravacao .= "garantidor_nome = '$garantidor_nome', garantidor_renda = '$garantidor_renda'";*/

    $sqlCadastroGravacao .= "INSERT INTO cadastro_katharine_tamashiro SET ";
    $sqlCadastroGravacao .= "nome = :nome, ";
    $sqlCadastroGravacao .= "email = :email, ";
    $sqlCadastroGravacao .= "celular = :celular";

    //Parametrização
    $statementCadastroGravacao = $conDB->prepare($sqlCadastroGravacao);

    if($statementCadastroGravacao !== false){ 

        $statementCadastroGravacao->bindParam(":nome", $nome, PDO::PARAM_STR);
        $statementCadastroGravacao->bindParam(":email", $email, PDO::PARAM_STR);
        $statementCadastroGravacao->bindParam(":celular", $celular, PDO::PARAM_STR);
        
        //Execução
        $statementCadastroGravacao->execute();
    }

    //Debug
    echo "nome: " . $nome . "<br>";
    echo "email: " . $email . "<br>";
    echo "celular: " . $celular . "<br>";
    echo "sqlCadastroGravacao: " . $sqlCadastroGravacao . "<br>";

    unset($statementCadastroGravacao);
    //unset($sqlCadastroGravacao);
    $conDB = null;

    //Redirecionamento de página
    header("Location: cadastro-listagem2.php");
?>