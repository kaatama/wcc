<?php
//Variáveis
$nomeUsuario = "Katharine Tamashiro";
$idadeUsuario = 24;
$maiorIdade = false; //abaixo de 18 - false | acima ou igual a 18 - true
//$arrComidasFavoritas = array("Sushi", "Brócolis", "Qualquer coisa de comer");
$arrComidasFavoritas = array();
$arrComidasFavoritas[0] = "Sushi";
$arrComidasFavoritas[1] = "Brócolis";
$arrComidasFavoritas[2] = "Massas";
$arrComidasFavoritas[3] = "Qualquer coisa de comer";



//Debug
//echo "Katharine Tamashiro"; //imprimir string
/*
echo "Nome do usuário: " . $nomeUsuario . "<br/>";
echo "Idade do usuário: " . $idadeUsuario . "<br/>";
echo "Coleção: " . $arrComidasFavoritas . "<br/>"; 
echo "Comidas favoritas: " . $arrComidasFavoritas[0] . ", " . $arrComidasFavoritas[1] . ", " . $arrComidasFavoritas[2] . "<br/>";
echo "<pre>";
var_dump($arrComidasFavoritas); 
echo "</pre>";
*/

if ($idadeUsuario >= 18){
    $maiorIdade = true;
    echo "Maior de idade <br/>";
}
else {
    //$maiorIdade = false; //não é necessário usar aqui pois já está declarada lá em cima
    echo "Menor de idade <br/>";
}

//echo "A variável maiorIdade é: " . $maiorIdade . "<br/>"; //retorna 1 se verdadeiro
/*echo "A variável maiorIdade é: ";
var_dump($maiorIdade);
*/

//Loop
echo "Comidas favoritas: <br/>";
for($contadorDeComida = 0; $contadorDeComida < count($arrComidasFavoritas); $contadorDeComida++) {
    echo "Contador: " . $contadorDeComida . " - ";
    echo $arrComidasFavoritas[$contadorDeComida] . "<br/>";
}

echo "Função count: " . count($arrComidasFavoritas) . "<br/>";

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Katharine Tamashiro</title>
</head>
<body>
    <h1>
        Nome do usuário: <?php echo $nomeUsuario; ?>
    </h1>
    <div style="color: blue;">
        Idade do usuário: <?php echo $idadeUsuario; ?>
    </div>

    <?php if ($maiorIdade){ ?>
        <div>Maior de idade</div>
    <?php }else{ ?>
        <div>Menor de idade</div>
    <?php } ?>
    <div>
        É maior de idade: 
        <?php
            if ($maiorIdade) { 
                echo "Sim <br/>";
            }
            else {
                echo "Não <br/>";
            }
            echo $maiorIdade ? 'Maior de idade' : 'Menor de idade'; 
            // as três opções acima funcionam, são apenas métodos diferentes para chegar no mesmo resultado
        ?> 
    </div>

    <div style="font-size: 16px; font-family: Arial, Times, Serif; color: #d3d3d3;">
        Comidas favoritas: <?php echo $arrComidasFavoritas[0]; ?>, 
                            <?php echo $arrComidasFavoritas[1]; ?>, 
                            <?php echo $arrComidasFavoritas[2]; ?>
    </div>

    <?php for($contadorDeComida = 0; $contadorDeComida < count($arrComidasFavoritas); $contadorDeComida++) { ?>
        <div>Comidas favoritas: 
            <?php echo $arrComidasFavoritas[$contadorDeComida]; ?>
        </div>
        <br/>
    <?php } ?>
</body>
</html>