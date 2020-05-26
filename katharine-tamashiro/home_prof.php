<?php
//Funções.
function retornarTexto($parametro1){
    //Variáveis.
    $variavelRetorno = "";

    //Definição de valores.
    //$variavelRetorno = $parametro1;

    //Lógica.
    $variavelRetorno = str_replace("r", "1", $parametro1);




    return $variavelRetorno;
}








//Variáveis.
//$pesquisaDados = "feijoadas;yakisoba;churrasco;sopa";
$pesquisaDados = "feijoadas;yakisoba;churrasco;sopa";



//Trasformar em coleção (array).
$arrPesquisaDados = explode(";", "feijoadas;yakisoba;churrasco;sopa");



//Registros.
$arrDestinos = array();

$arrDestinos[0] = "Rio de Janeiro,nome_da_imagem1.jpg,Aproveite os encantos da cidade maravilhosa";
$arrDestinos[1] = "São Paulo,nome_da_imagem2.jpg,Conheça o incomparável charme paulistano";
$arrDestinos[2] = "Cabo Frio,nome_da_imagem3.jpg,Um paraíso tropical ao seu alcance";
//$arrDestinos[3] = "Campinas,nome_da_imagem3.jpg,Negócios e lazer em um só lugar";





//Debug.
//echo "resultado da função: " . retornarTexto() . "<br />";
echo "resultado da função: " . retornarTexto("Jorge Mauricio") . "<br />";





echo "<br /><br /><br /><br />";



/*
for($i = 0; $i < count($arrPesquisaDados); $i++)
{
    //echo "contador: " . $i . "<br />";
    //echo "informação: " . $arrPesquisaDados[$i] . "<br />";
    echo $arrPesquisaDados[$i] . ", ";

}
*/


for($i = 0; $i < count($arrDestinos); $i++)
{
    //Variáveis.
    $arrDestino = explode(",", $arrDestinos[$i]);


    for($j = 0;$j < count($arrDestino);$j++){

        echo "Item: " . $arrDestino[$j] . "<br />";
    }
    echo "<br />";

    /*
    echo "Título: " . $arrDestino[0] . "<br />";
    echo "Imagem: " . $arrDestino[1] . "<br />";
    echo "Descrição: " . $arrDestino[2] . "<br />";
    echo "<br />";
    */


    //echo "informação: " . $i . " " . $arrDestinos[$i] . "<br />";
}





//Debug.
//echo phpinfo();

//echo "teste";


//echo "Pesquisa Dados: " . $pesquisaDados . "<br />";
//echo "Array Pesquisa Dados: " . $arrPesquisaDados . "<br />";

/*
echo "Array Pesquisa Dados: ";
var_dump($arrPesquisaDados);
echo "<br />";
*/


//echo implode("<br/>", $arrPesquisaDados);

echo "Destinos 1: " . $arrDestinos[0] . "<br />";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>



    <style>

        .links-topo{
            color: #999999; 
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
        }

        .links-topo:hover{
            color: #ffffff;
        }    


        .bto-principal{
            position: absolute; 
            display: block; 
            
            width: 150px; 
            height: 30px; 
            line-height: 30px; 
            
            border: 2px solid #ffffff;

            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            color: #ffffff;
            border-radius: 5px;
        }
        .bto-principal:hover{
            color: #337ab7;
            background-color: #ffffff;
        }


        .li-nav{
            position: relative;
            display: inline-block;

            margin-left: 10px;
        }

        .link1{
            position: relative;
            display: block;
            height: 25px;
            line-height: 25px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            color: #ffffff;
            font-size: 15px;
            text-decoration: none;
            text-transform: uppercase;
        }
        .link1:hover{
            
            border-bottom: 1px solid #ffffff;
        }   

        .link2
        {
            position: relative; 
            display: inline-block; 
            box-sizing: border-box;
            width: 20%; 
            height: 20px;

            font-family: Arial, Helvetica, sans-serif;
            color: #999999;
            text-decoration: none;
            text-indent: 20px;

            border-right: 1px solid #000;
            float: left;
            margin-top: 12px;
        }
        .link2:hover{
            color: #056a7d;
        }  

        .link3{
            position: relative; 
            display: block; 

            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            text-decoration: none;
            font-weight: bold;

            color: #003f4e; 
            margin-top: 10px; 
            margin-bottom: 5px;            
        }

        .descricao{
            position: relative; 
            display: block; 

            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            color: #00a8a7;
        }


        .imagem{
            position: relative; 
            display: block; 
            width: 300px; 
            height: 150px;
            background-color: #4e5050;
        }

        .container{
            position: relative; 
            display: inline-block; 
            width: 300px; 
            text-align: left;
            margin-left: 20px;
        }


    </style>
</head>
<body style="margin: 0px; padding: 0px;">
    
    <div style="position: relative; 
                display: block; 
                width: 100%; 
                height: 570px; 
                background-color: #cccccc;">
        
        <div class="divMudarCor" style="position: relative; 
                                        display: block; 
                                        width: 1000px; 
                                        height: 100%; 
                                        background-color: #4e5050; 
                                        margin-left: auto; 
                                        margin-right: auto;">
            
            <img src="img/layout-logo.jpg" style="width: 150px; 
                                                  margin-top: 20px;" />

            <div style="position: absolute; 
                        display: block; 
                        top: 0px;
                        right: 0px;
                        /*width: 300px; */
                        height: 40px; 
                        line-height: 40px;
                        border-bottom: 1px solid #999999;">

                <a href="#" class="links-topo" style="border-right: 1px solid #999999;
                margin-right: 10px; 
                padding-right: 10px;">
                    EXTRANET
                </a>

                <a href="#" class="links-topo" style="">
                    PORTAL DO INVESTIDOR
                </a>

            </div>


            <div style="position: absolute; 
                        display: block; 
                        top: 50px; 
                        right: 0px;">
                
                <ul style="margin: 0px; position: relative; display: block; list-style:circle;">
                    <li class="li-nav">
                        
                        <a href="#" class="link1">
                            &bull; &nbsp; Link 01
                        </a>  
                                              
                    </li>
                    <li class="li-nav">
                        <a href="#" class="link1">
                            &bull;  Link 01
                        </a>                        
                    </li>
                    <li class="li-nav">
                        <a href="#" class="link1">
                            &bull; Link 01
                        </a>                        
                    </li>
                    <li class="li-nav">
                        <a href="#" class="link1">
                            &bull; Link 01
                        </a>                        
                    </li>
                    <li class="li-nav">
                        <a href="#" class="link1">
                            &bull; Link 01
                        </a>                        
                    </li>
                    <li class="li-nav">
                        <a href="#" class="link1">
                            &bull; Link 01
                        </a>                        
                    </li>
                </ul>
            </div>

            <h1 style="position: absolute; 
                        display: block; 
                        top: 200px;
                        width: 100%;
                        
                        text-align: center;
                        font-family: Arial, Helvetica, sans-serif;
                        color: #ffffff;
                        font-size: 40px;
                        text-transform: uppercase;
                        font-weight: bold;
                        
                        ">
                Invista Com Segurança
            </h1>
            <h2 style="position: absolute; 
                        display: block; 
                        top: 260px;
                        width: 100%;
                        
                        text-align: center;
                        font-family: Arial, Helvetica, sans-serif;
                        color: #ffffff;
                        font-size: 20px;
                        font-weight: normal;
                        ">
                A rede Hampton by Hilton chegou ao Brasil.
            </h2>




            <a href="#" class="bto-principal" style="
                                                    right: 0px; 
                                                    left:  0px; 
                                                    bottom: 100px;
                                                    margin-left: auto; 
                                                    margin-right: auto;
                                                    ">
                Saiba mais
            </a>


            
            
            div interna


            <div style="position: absolute; 
                        display: block;
                        bottom: -35px;
                        left: 0px;
                        width: 100%; 
                        box-sizing: border-box;
                        height: 70px; 
                        background-color: #ffffff; 
                        border: 12px solid #056a7d;">

                        <a href="#" class="link2" style="">
                            Hotel
                        </a>

                        <a href="#" class="link2" style="">
                            Check In / Check Out
                        </a>

                        <a href="#" class="link2" style="">
                            1 Hóspede
                        </a>

                        <a href="#" class="link2" style="border-right: none; ">
                            Cód. Promocional
                        </a>

                        <a href="#" class="link2" style="
                        border-right: none; 
                        text-align: center; 
                        text-indent: 0px; 
                        color: #056a7d;
                        font-weight: bold;
                        background-color: #ddf503; 
                        height: 100%; 
                        line-height: 46px;
                        margin-top: 0px;">
                            Reserve
                        </a>
            </div>


        </div>
    </div>

    <!--Conteúdo-->
    <div style="position: relative; 
                display: block; 
                width: 100%; 
                height: 400px; 
                margin-top: 40px;">
        <div style="position: relative; 
                    display: block; 
                    width: 1000px; 
                    height: 100%; 
                    margin-left: auto; 
                    margin-right: auto; text-align: center;">


            <?php 
                for($i = 0; $i < count($arrDestinos); $i++){
                    //Variáveis.
                    $arrDestino = explode(",", $arrDestinos[$i]);
                
            ?>
                <div class="container">
                    <img scr="<?php echo $arrDestino[1];?>" class="imagem" />

                    <a href="#" class="link3">
                        <?php echo $arrDestino[0];?>
                    </a>

                    <div class="descricao">
                        <?php echo $arrDestino[2];?>
                    </div>
                </div>
            <?php } ?>







        </div>
    </div>


    <div style="position: relative; 
            display: block; 
            width: 100%; 
            height: 250px;
            background-color: #056a7d;">
        texto
    </div>

</body>
</html>