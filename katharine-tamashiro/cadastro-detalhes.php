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
        <?//php if(!empty($resultadoCadastro)){ ?>
            <!--<table>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Celular</th>
                    <th>Editar</th>
                </tr>
                </*?php
                        foreach($resultadoCadastro as $linhaCadastro){?*/>
                            <tr>
                                <td>
                                    <//?php echo $linhaCadastro["id"]; ?>
                                </td>
                                <td>
                                    <a href="cadastro-detalhes.php?id=<//?php echo $linhaCadastro["id"]; ?>"><//?php echo $linhaCadastro["nome"]; ?></a>
                                </td>
                                <td>
                                    <//?php echo $linhaCadastro["email"]; ?>
                                </td>
                                <td>
                                    <//?php echo $linhaCadastro["celular"]; ?*/>
                                </td>
                                <td>
                                    <a href="cadastro-editar.php?id=<//?php echo $linhaCadastro["id"]; ?>">Editar</a>
                                </td>
                            </tr>
            </table>
        <//?php }
            }else { ?>
                Nenhum cadastro encontrado
                <br>
        <//?php }?>
        <br>-->
        <div>
            id: <?php echo $id; ?>
            <?php //echo $linhaCadastro["id"]; ?>
        </div>
        <div>
            nome: <?php echo $nome; ?>
            <?php //echo $linhaCadastro["nome"]; ?>
        </div>
        <div>
            email: <?php echo $email; ?>
            <?php //echo $linhaCadastro["email"]; ?>
        </div>
        <div>
            celular: <?php echo $celular; ?> 
            <?php //echo $linhaCadastro["celular"]; ?>
        </div>
    </body>
</html>

<?php 
    // Limpeza
    $conDB = null;
?>