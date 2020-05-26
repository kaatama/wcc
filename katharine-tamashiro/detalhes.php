<?php
    //Variáveis
    $id = $_GET["identificador"];
    $detalhesTitulo = "";
    $detalhesImagem = "";
    $detalhesDescricao = "";
    
    
    //Resgate de informações
    //echo implode(", ", $_GET);
    //var_dump($_GET);

    
    // Registros
    include "include-dados.php"; //pega os dados que estão no arquivo include-dados.php
    //var_dump($arrDestinos);
    
    
    //Debug
    //echo "Informações resgatadas: " . $id . "</br>";

    //$arrDestinos = array();

    //$arrDestinos[0] = "Rio de Janeiro,rj.jpg,Aproveite os encantos da cidade maravilhosa";
    //$arrDestinos[1] = "São Paulo,sp.jpg,Conheça o incomparável charme paulistano";
    //$arrDestinos[2] = "Cabo Frio,cabo-frio.jpg,Um paraíso tropical ao seu alcance";
    //echo "Página de detalhes";


    //Seleção dos Registros
    for ($i=0; $i < count($arrDestinos); $i++) { 
        $arrDestino = explode(",", $arrDestinos[$i]); 
        if ($id == $arrDestino[3]) {
            $detalhesTitulo = $arrDestino[0];
            $detalhesImagem = $arrDestino[1];
            $detalhesDescricao = $arrDestino[2];
        }
    }

    //echo $detalhesTitulo . "</br>";
   // echo $detalhesImagem . "</br>";
    //echo $detalhesDescricao . "</br>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <div>
            <img src="img/<?php echo $detalhesImagem ?>">
            <h1><?php echo $detalhesTitulo ?></h1>
            <span><?php echo $detalhesDescricao ?> </span>
        </div>
    </body>
</html>