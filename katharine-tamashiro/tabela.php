<?php 

include "include-dados.php"; //pega os dados que estão no arquivo include-dados.php

//Seleção dos Registros
for ($i=0; $i < count($arrDestinos); $i++) { 
    $arrDestino = explode(",", $arrDestinos[$i]); 
    if ($id == $arrDestino[3]) {
        $detalhesTitulo = $arrDestino[0];
        $detalhesImagem = $arrDestino[1];
        $detalhesDescricao = $arrDestino[2];
    }
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
    <table>
        <tr>
            <th>Cidades</th>
            <th>Imagens</th>
            <th>Descrição</th>
        </tr>
        <?php 
            for ($i=0; $i < count($arrDestinos); $i++) { 
                $arrDestino = explode(",", $arrDestinos[$i]); 
        ?>
            <tr>
                <td>
                    <?php echo $arrDestino[0]; ?>
                </td>
                <td>
                    <?php echo $arrDestino[1]; ?>
                </td>
                <td>
                    <?php echo $arrDestino[2]; ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>