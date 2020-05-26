<?php
    //ini_set('display_errors', 1); //mostra o erro

    include "include-db.php";
    //Resgate de informações
    $idCadastro = $_GET["id"]; //Se vazio, retorna todos os registros

    //Montagem da query SQL
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
    $statementCadastro = $conDB->prepare($sqlCadastroLer);

    if($statementCadastro !== false){ //!== significa que o obj precisa ser qualquer coisa diferente de false, não necessariamente que é true
        //Parâmetros
        if ($idCadastro != ""){
            $statementCadastro->bindParam(":id", $idCadastro, PDO::PARAM_STR);
        }

        //Execução
        $statementCadastro->execute();
    }

    //Alocação dos resultados
    $resultadoCadastro = $statementCadastro->fetchAll();

    //Variáveis
    $id = "";
    $nome = "";
    $email = "";
    $celular = "";

    //Resgate de dados
    foreach($resultadoCadastro as $linhaCadastro){
        $id =  $linhaCadastro["id"];
        $nome = $linhaCadastro["nome"];
        $email = $linhaCadastro["email"];
        $celular = $linhaCadastro["celular"];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar</title>
    </head>
    <body>
        <form method="post" action="cadastro-update.php">
            <input type="hidden" name="id" value=<?php echo $id ?>>
            <label>Nome:</label>
            <input type="text" name="nome" value=<?php echo $nome ?>>
            <br>
            <label>Email:</label>
            <input type="text" name="email" value=<?php echo $email ?>>
            <br>
            <label>Celular:</label>
            <input type="text" name="celular" value=<?php echo $celular ?>>
            <br>
            <button>Editar</button>
        </form>
    </body>
</html>

<?php 
    // Limpeza
    unset($statementCadastro);
    unset($resultadoCadastro);

    $conDB = null;
?>