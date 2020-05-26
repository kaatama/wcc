<?php

    $conDB = new PDO("mysql:host=192.175.105.180; dbname=aula_db_wcc", "fic", "Fic##132");

   
    //tentativa de conexão
    try{
        //configyeação dele
        $conDB->exec("set names utf8");

        //execução
        $conDB->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $erroDB)
    {
        echo "Erro no DB" . $erroDB->getMessage;
    }

    //montar query sql
    $sqlCadastroLer = "SELECT * FROM cadastro_taciana_cavalcanti";

    //Paramentrização
    $statementCadastro = $conDB->prepare($sqlCadastroLer);

    if($statementCadastro !== false){

        //Parametros

        //Execute
        $statementCadastro->execute();

    }

    //Alocação dos resultados 
    $resultadoCadastro = $statementCadastro->fetchAll();

    //Exebição de Resuldatos
    if(!empty($resultadoCadastro)){

        foreach($resultadoCadastro as $linhaCadastro){
            echo $linhaCadastro['id'] ."<br>";
            echo $linhaCadastro['nome'] ."<br>";
            echo $linhaCadastro['email'] ."<br>";
            echo $linhaCadastro['celular'] ."<br>";
            echo "<br><hr>";
        }

        echo"Cadastro encontrados <br>";
    }else{
        echo "Nenhum cadastro encontrados";
    }

    //debug
    echo "<br>";
    echo "<hr>";
    echo "<br>";
    echo "sqlCadastroLer" . $sqlCadastroLer . "<br>";

    echo "ConDB: ";
    var_dump($conDB);
    echo "<br>";

    echo "statementCadastro: ";
    var_dump($statementCadastro);
    echo "<br>";

    echo "resultadoCadastro: <pre>";
    var_dump($resultadoCadastro);
    echo "</pre><br>";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coleçoes</title>
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
              if(!empty($resultadoCadastro)){

                foreach($resultadoCadastro as $linhaCadastro){
                }
            }
        ?>
            <tr>
                <td>
                    <?php echo $linhaCadastro['id']; ?>
                </td>
                <td>
                    <?php echo $linhaCadastro['nome']; ?>
                </td>
                <td>
                    <?php echo $linhaCadastro['email']; ?>
                </td>
                <td>
                    <?php echo $linhaCadastro['celular']; ?>
                </td>
            </tr>
        <?php }else{
                echo "Nenhum cadastro encontrados";
            } ?>
        
    </table>
</body>
</html>
<?php
       //Limpeza

       unset($statementCadastro);
       unset($resultadoCadastro);
   
       $conDB = null;
   
?>