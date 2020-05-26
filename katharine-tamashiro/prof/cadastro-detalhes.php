<?php
ini_set('display_errors', 1); //erros

//DB.
include "include-db.php";


//Restage de informações.
$idCadastro = $_GET["id"];
//$idCadastro = $_GET["id"];


//Variáveis.
$id = "";
$nome = "";
$email = "";
$celular = "";



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
    $sqlCadastroLer .= "WHERE id = :id";
}else{
    exit("Nenhum cadastro encontrado.");

    $sqlCadastroLer .= "WHERE id = 0";
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



//Dados.
if(!empty($resultadoCadastro)){

    foreach($resultadoCadastro as $linhaCadastro){

        $id = $linhaCadastro["id"];
        $nome = $linhaCadastro["nome"];
        $email = $linhaCadastro["email"];
        $celular = $linhaCadastro["celular"];
                
        /*
        echo $linhaCadastro["id"];
        echo $linhaCadastro["nome"];
        echo $linhaCadastro["email"];
        echo $linhaCadastro["celular"];
        */
    }
}else{
    //Nenhum registro encontrado.

}


echo $linhaCadastro["id"];
echo $linhaCadastro["nome"];
echo $linhaCadastro["email"];
echo $linhaCadastro["celular"];


//Debug.
//echo "id: " . $id . "<br/>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Detalhes</title>


    <style>
        table, th, td {
        border: 1px solid black;
        }
    </style>
</head>
<body>


            <div>
                id: <?php echo $id; ?>
            </div>
            <div>
                Nome: <?php echo $nome; ?>
            </div>
            <div>
                e-mail: <?php echo $email; ?>
            </div>
            <div>
                Celular: <?php echo $celular; ?>
            </div>

</body>
</html>

<?php
//Limpeza.
unset($statementCadastro);
unset($resultadoCadastro);

$conDB = null;
?>