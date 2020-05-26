<?php
    ini_set('display_errors', 1); //mostra o erro

    include "include-db.php";

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
    $sqlCadastroLer = ""; 
    $sqlCadastroLer .= "SELECT ";  
    $sqlCadastroLer .= "id, ";  
    $sqlCadastroLer .= "nome, ";  
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
    <iframe id="iframeDetalhes" name="iframeDetalhes" src="cadastro-detalhes.php" style="height:100px; width: 500px">
        
    </iframe>
    <table>
        <form method="post" action="cadastro-excluir.php">
            <button>Excluir</button>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Editar</th>
                <th>Excluir</th>
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
                                <a href="cadastro-detalhes.php?id=<?php echo $linhaCadastro["id"]; ?>" target="iframeDetalhes"><?php echo $linhaCadastro["nome"]; ?></a>
                            </td>
                            <td>
                                <?php echo $linhaCadastro["email"]; ?>
                            </td>
                            <td>
                                <?php echo $linhaCadastro["celular"]; ?>
                            </td>
                            <td>
                                <a href="cadastro-editar.php?id=<?php echo $linhaCadastro["id"]; ?>">Editar</a>
                            </td>
                            <td>
                                <input type="checkbox" name="id[]" value="<?php echo $linhaCadastro["id"]; ?>">
                            </td>
                        </tr>
            <?php   } 
                }?>
        </form>
    </table>
    <br>
    <form method="post" action="cadastro-incluir.php">
        <label>Nome:</label>
        <input type="text" name="nome"/>
        <br>
        <label>Email:</label>
        <input type="text" name="email"/>
        <br>
        <label>Celular:</label>
        <input type="text" name="celular"/>
        <br>
        <button>Incluir</button>
    </form>
</body>
</html>


<?php
    //Limpeza
    unset($statementCadastro);
    unset($resultadoCadastro);
    $conDB = null;
?>