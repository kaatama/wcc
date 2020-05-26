<?php
    ini_set('display_errors', 1); //mostra o erro

    //Criação da instância do obj
    $conDB = new PDO("mysql:host=192.175.105.180;dbname=aula_db_wcc","fic","Fic##132"); //acessar o banco de dados


    //Tentativa de conexão
    try{
        //Execução 
        $conDB->exec("set names utf8");

        //Configuração do obj
        $conDB->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $erroDB){
        echo "Erro no DB" . $erroDB->getMessage();
    }

    //Resgate de informações
    $idCadastro = ""; //Se vazio, retorna todos os registros


    /*//Montagem da query SQL
    $sqlCadastroLer = "SELECT id, nome, email, celular FROM cadastro_katharine_tamashiro
                        WHERE id = 1
                        AND nome like 'João%'
                    ";*/ //funcionando
    /*$sqlCadastroLer = "SELECT id, nome, email, celular FROM cadastro_katharine_tamashiro
                        WHERE id = " . $idCadastro;*/ //funcionando
    //$sqlCadastroLer = "SELECT id, nome, email, celular FROM cadastro_katharine_tamashiro
                        //WHERE id = :id";
    
    $sqlCadastroLer .= "SELECT ";  
    $sqlCadastroLer .= "id, ";  
    //$sqlCadastroLer .= "nome, ";  
    $sqlCadastroLer .= "email, ";  
    $sqlCadastroLer .= "celular ";  
    $sqlCadastroLer .= "FROM cadastro_katharine_tamashiro ";  
    if ($idCadastro != ""){
       $sqlCadastroLer .= "WHERE id = :id";           
    }

    //Parametrização
    $statementCadastro = $conDB->prepare($sqlCadastroLer);

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

    //Exibição dos resultados
    /*if(!empty($resultadoCadastro)){
        foreach($resultadoCadastro as $linhaCadastro){
            echo $linhaCadastro["id"] . "</br>";
            echo $linhaCadastro["nome"] . "</br>";
            echo $linhaCadastro["email"] . "</br>";
            echo $linhaCadastro["nome"] . "</br>";
            echo "</br></br>";
        }

        echo "Cadastros encontrados.</br></br>";

    }
    else {
        echo "Nenhum cadastro encontrado.</br></br>";
    }*/

    //Debug
    echo "idCadastro: " . $idCadastro . "</br>";
    echo "sqlCadastroLer: " . $sqlCadastroLer . "</br>";

    /*echo "conDB: ";
    var_dump($conDB);
    echo "</br>";

    echo "statementCadastro: ";
    var_dump($statementCadastro);
    echo "</br>";

    echo "resultadoCadastro: <pre>";
    var_dump($resultadoCadastro);
    echo "</pre></br>";
    */
    //Limpeza
    //unset($statementCadastro);
    //unset($resultadoCadastro);

    $conDB = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Celular</th>
        </tr>
        <?php 
            //Exibição dos resultados
            if(!empty($resultadoCadastro)){
                foreach($resultadoCadastro as $linhaCadastro){?>
                    <tr>
                        <td>
                            <?php echo $linhaCadastro["id"]; ?>
                        </td>
                        <td>    
                            <?php echo $linhaCadastro["nome"]; ?>
                        </td>
                        <td>
                            <?php echo $linhaCadastro["email"]; ?>
                        </td>
                        <td>
                            <?php echo $linhaCadastro["celular"]; ?>
                        </td>
                    </tr>
        <?php   } 
            }?>
            
    </table>
</body>
</html>


<?php
    //Limpeza
    unset($statementCadastro);
    unset($resultadoCadastro);
?>