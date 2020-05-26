<?php
ini_set('display_errors', 1); //erros


//DB.
include "include-db.php";



//Variáveis.
//$idCadastro = 5;
$idCadastro = "";




//Montagem do query SQL.
//$sqlCadastroLer = "SELECT id, nome, email, celular FROM cadastro_jorge_mauricio WHERE id = 5 AND nome = 'Janaina'"; //funcionando
//$sqlCadastroLer = "SELECT id, nome, email, celular FROM cadastro_jorge_mauricio WHERE id = " . $idCadastro; //funcionando
//$sqlCadastroLer = "SELECT id, nome, email, celular FROM cadastro_jorge_mauricio WHERE id = :id";

$sqlCadastroLer = ""; 
$sqlCadastroLer .= "SELECT ";
$sqlCadastroLer .= "id, ";
$sqlCadastroLer .= "nome, ";
$sqlCadastroLer .= "email, ";
$sqlCadastroLer .= "celular ";
$sqlCadastroLer .= "FROM cadastro_jorge_mauricio ";
if($idCadastro != "")
{
    //$sqlCadastroLer .= "WHERE id = :id";
}


//Parametrização.
$statementCadastro = $conDB->prepare($sqlCadastroLer);

if($statementCadastro !== false)
{
    //Parâmetros.
    if($idCadastro != "")
    {
        $statementCadastro->bindParam(":id", $idCadastro, PDO::PARAM_STR);
    }
    //$statementCadastro->bindParam(":nomeSelecao", "Janaina", PDO::PARAM_STR);

    //Execução.
    $statementCadastro->execute();


}



//Alocação dos resultados.
$resultadoCadastro = $statementCadastro->fetchAll();





//Exibição dos resultados.
if(!empty($resultadoCadastro)){

    foreach($resultadoCadastro as $linhaCadastro){
        /*
        echo $linhaCadastro["id"] . "<br />";
        echo $linhaCadastro["nome"] . "<br />";
        echo $linhaCadastro["email"] . "<br />";
        echo $linhaCadastro["celular"] . "<br />";
        echo "<br />";
        */
    }


    //echo "cadastros encontrados.<br /><br />";
 
}else{
    //echo "Nenhum cadastro encontrado.<br /><br />";
}






//Dubug.
//echo "sqlCadastroLer: " . $sqlCadastroLer . "<br />";
//echo "sqlCadastroLer:  $sqlCadastroLer <br />";
//echo "idCadastro: " . $idCadastro . "<br />";
/*
echo "conDB: ";
var_dump($conDB);
echo "<br />";

echo "statementCadastro: ";
var_dump($statementCadastro);
echo "<br />";

echo "resultadoCadastro: <pre>";
var_dump($resultadoCadastro);
echo "</pre><br />";
*/


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Listagem</title>


    <style>
        table, th, td {
        border: 1px solid black;
        }
    </style>
</head>
<body>


<iframe id="iframeExemplo" name="iframeExemplo" scr="layout-home.html" height="100" width="100%">

</iframe>


<form method="post" action="cadastro-excluir.php">

    <button>
        Excluir
    </button>

    <?php if(!empty($resultadoCadastro)){ ?>

    <table>
        <tr>
            <td>
                ID
            </td>
            <td>
                Nome
            </td>
            <td>
                e-mail
            </td>
            <td>
                Celular
            </td>
            <td>
                Editar
            </td>
            <td>
                Excluir
            </td>
        </tr>

        <?php
        foreach($resultadoCadastro as $linhaCadastro){
        ?>
            <tr>
                <td>
                    <?php echo $linhaCadastro["id"]; ?>
                </td>
                <td>
                    <a href="cadastro-detalhes.php?id=<?php echo $linhaCadastro["id"]; ?>" target="iframeExemplo">
                        <?php echo $linhaCadastro["nome"]; ?>
                    </a>
                </td>
                <td>
                    <?php echo $linhaCadastro["email"]; ?>
                </td>
                <td>
                    <?php echo $linhaCadastro["celular"]; ?>
                </td>
                <td>
                    <a href="cadastro-editar.php?id=<?php echo $linhaCadastro["id"]; ?>">
                        Editar
                    </a>
                </td>


                    <td style="text-align: center">

                    <input type="checkbox" id="id<?php echo $linhaCadastro["id"]; ?>" name="id[]" value="<?php echo $linhaCadastro["id"]; ?>" />


                        

                        <!--button>
                            X
                        </button-->

                    </td>

            </tr>


        <?php
        }
        ?>
    </table>
    </form>


    <br/>
    <br/>
    <br/>
    <form method="post" action="cadastro-incluir.php" target="_blank"
    enctype="multipart/form-data" >
        Nome: <input type="text" name="nome" />
        <br/>
        e-mail: <input type="text" name="email"  />
        <br/>
        Celular: <input type="text" name="celular"  />
        <br/>


        <button>
            Incluir
        </button>
    </form>


    <?php }else{ ?>

        Nenhum cadastro encontrado.
    <?php } ?>
</body>
</html>
<?php
//Limpeza.
unset($statementCadastro);
unset($resultadoCadastro);

$conDB = null;
?>
