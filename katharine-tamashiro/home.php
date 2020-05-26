<?php
    //echo phpinfo();
    // Variáveis
    $pesquisaDados = "Sushi;Brócolis;Massas;Qualquer coisa de comer";
    $arrPesquisaDados = explode(";", "Sushi;Brócolis;Massas;Qualquer coisa de comer");     // Transformar em coleção (array)

    //Registros
    $arrDestinos = array();

    $arrDestinos[0] = "Rio de Janeiro,rj.jpg,Aproveite os encantos da cidade maravilhosa,1";
    $arrDestinos[1] = "São Paulo,sp.jpg,Conheça o incomparável charme paulistano,2";
    $arrDestinos[2] = "Cabo Frio,cabo-frio.jpg,Um paraíso tropical ao seu alcance,3";
    
    //Funções
    function retonarTexto($parametro1, $substituicao) {
        // Varáveis
        $variavelRetorno = "";

        // Definição de valores
        $variavelRetorno = $parametro1;

        //Lógica
        $variavelRetorno = str_replace("r", $substituicao, $parametro1);
        $variavelRetorno = str_replace(" ", "", $variavelRetorno);
        return $variavelRetorno;
    }

    function montarHTML($parametro1) {
        //var
        $variavelRetorno = "";

        //Registros
        //$arrDestinos = array();
        //$arrDestinos = $parametro1;

        //$arrDestinos[0] = "Rio de Janeiro,rj.jpg,Aproveite os encantos da cidade maravilhosa";
        //$arrDestinos[1] = "São Paulo,sp.jpg,Conheça o incomparável charme paulistano";
        //$arrDestinos[2] = "Cabo Frio,cabo-frio.jpg,Um paraíso tropical ao seu alcance";
        include "include-dados.php"; //pega os dados que estão no arquivo include-dados.php
        //loop
        for ($i=0; $i < count($arrDestinos); $i++) { 
            $arrDestino = explode(",", $arrDestinos[$i]); 
        
            //montagem HTML
            //$variavelRetorno = $variavelRetorno . "<img src='img/layout-logo.png' style='width: 150px; margin-top: 10px' />";
            //$variavelRetorno .= "<img src='img/layout-logo.png' style='width: 150px; margin-top: 10px' />"; // faz a mesma coisa que a linha de cima, mas está otimizado
            $variavelRetorno .= "<div class='div-cidades'>";
            $variavelRetorno .= "<img src='img/{$arrDestino[1]}' class='cidades-img'>";
            $variavelRetorno .= "<a href='detalhes.php?identificador={$arrDestino[3]}' class='cidades-link'>{$arrDestino[0]}</a>";
            $variavelRetorno .= "<div class='cidades-desc'>{$arrDestino[2]}</div>";
            $variavelRetorno .= "</div>";
        }
        return $variavelRetorno;
    }
                    

    // Debug
    //echo "Pesquisa dados: " . $pesquisaDados . "<br/>";
    // echo "Array Pesquisa Dados: " . $arrPesquisaDados . "<br/>"; //n funciona pq exibe apenas o TIPO de objeto
    //echo "Array Pesquisa Dados: ";
    //var_dump($arrPesquisaDados);
    
    /* echo "Lista de comidas favoritas: </br>";
    // Loop
    for($i=0; $i < count($arrPesquisaDados); $i++) {
        //echo "Contador: " . $i . "<br/>";
        echo $i . " - " . $arrPesquisaDados[$i] . "<br/>";
    } */
    //echo implode(";", $arrPesquisaDados);
    //echo "Destino 1: " . $arrDestinos[0] . "</br>";

    /*for ($i=0; $i < count($arrDestinos); $i++) {
        $arrDestino = explode(",", $arrDestinos[$i]); // está transformando string em array (coleção) 
        echo "Destino " . $i . ": " . $arrDestino[0] . "</br>";
        echo "Imagem " . $i . ": " . $arrDestino[1] . "</br>";
        echo "Destino " . $i . ": " . $arrDestino[2] . "</br></br>";
        for ($j=0; $j < count($arrDestino); $j++) {
            echo $arrDestino[$j] . "</br>";
        }
        echo "</br>";
    }*/

    echo "Resultado da função: " . retonarTexto("Katharine", "asdasd") . "</br>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            .links-topo {
                color: #667292;
                text-decoration: none;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 14px;
            }
            .links-topo:hover {
                color: #ffffff;
            }
            .btn {
                position: absolute;
                display: block;
                border: 2px solid #ffffff;
                border-radius: 3px;
                width: 130px;
                height: 30px;
                right: 0;
                left: 0;
                margin-right: auto;
                margin-left: auto;
                line-height: 30px; /* deixar igual ao height para centralizar verticalmente*/
                bottom: 100px;
                background-color: transparent;
                color: #ffffff;
                text-align: center;
                text-decoration: none;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 16px;
            }
            .btn:hover {
                background-color: #ffffff;
                color: #667292;
            }
            .nav {
                position: absolute;
                display: block;
                right: 0;
                top: 50px;
            }
            .li-nav {
                display: inline-block;
                margin-left: 15px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
            }
            .li-nav:before {
                content: '\00a0\2022'; /* cria a bolinha*/
                color: #ffffff;
                padding: 0px;
                margin: 0px;
            }
            .li-nav:first-child:before {
                content: '';
            }
            .li-nav:hover {
                border-bottom: 2px solid #ffffff;
            }
            .link-nav {
                color: #ffffff;
                text-transform: uppercase;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 15px;
                text-decoration: none;
            }
            h1 {
                position: absolute;
                display: block;
                width: 100%;
                top: 300px;
                text-align: center;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 40px;
                color: #ffffff;
                text-transform: uppercase;
            }
            h2 {
                position: absolute;
                display: block;
                width: 100%;
                top: 375px;
                text-align: center;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 20px;
                font-weight: none;
                color: #ffffff;
            }
            .barra-fixa {
                position: absolute;
                display: block;
                bottom: -35px;
                margin-left: auto;
                margin-right: auto;
                left: 0;
                right: 0; 
                width: 1000px;
                box-sizing: border-box;
                height: 70px;
                background-color: #ffffff;
                border: 12px solid #056a7d;
            }
            .span {
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
            .div-conteudo {
                position: relative; 
                display: block; 
                width: 100%; 
                height: 400px;
                margin-top: 70px;
            }
            .div-destinos {
                position: relative;
                display: block;
                width: 1000px;
                height: 100%;
                margin-left: auto;
                margin-right: auto;
                text-align: center;
            }
            .div-cidades {
                position: relative;
                display: inline-block;
                width: 300px;
                text-align: left;
                margin-left: 20px;
            }
            .cidades-img {
                position: relative;
                display: block;
                width: 300px;
                height: 150px;
            }
            .cidades-link {
                position: relative;
                display: block;
                color: #000000;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 16px;
                text-decoration: none;
                font-weight: bold;
                color: #003f4e;
                margin-top: 10px;
                margin-bottom: 5px;
            }
            .cidades-desc {
                position: relative;
                display: block;
                color: #00a8a7;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 14px;
            }
            .ft-div {
                height: 150px;
                width: 75%;
                margin: auto;
                padding-top: 20px;
            }
            .ft-ul {
                position: relative;
                display: inline-grid;
            }
            .ft-li {
                text-decoration: none;
            }
        </style>
    </head>
    <body style="margin: 0px; padding: 0px;">
        <div style="position: relative;
                    display: block;
                    width: 100%;
                    height: 570px;
                    background-color: #bccad6; ">
            <div style="position: relative;
                        display: block;
                        width: 1000px;
                        height: 100%;
                        background-color: #8d9db6;
                        margin-left: auto;
                        margin-right: auto;">
                <img src="img/layout-logo.png" style="width: 150px;
                                                    margin-top: 10px" />
                <div style="position: absolute;
                            display: block;
                            top: 0px;
                            right: 0px;
                            /*width: 350px;*/
                            height: 40px;
                            line-height: 40px;
                            /*background-color: #66c2ff; */
                            border-bottom: 1px solid #f1e3dd;">
                    <a class="links-topo" href="#" style="border-right: 1px solid #f1e3dd; margin-right: 10px; padding-right: 10px;">
                        EXTRANET
                    </a>
                    <a class="links-topo" href="#" style="">
                        PORTAL DO INVESTIDOR
                    </a>
                </div>
                <div class="nav">
                    <ul style="margin: 0px; padding: 0px;">
                        <li class="li-nav">
                            <a href="#" class="link-nav">
                                Link 1
                            </a>
                        </li>
                        <li class="li-nav">
                            <a href="#" class="link-nav">
                                Link 2
                            </a>
                        </li>
                        <li class="li-nav">
                            <a href="#" class="link-nav">
                                Link 3
                            </a>
                        </li>
                        <li class="li-nav">
                            <a href="#" class="link-nav">
                                Link 4
                            </a>
                        </li>
                        <li class="li-nav">
                            <a href="#" class="link-nav">
                                Link 5
                            </a>
                        </li>
                        <li class="li-nav">
                            <a href="#" class="link-nav">
                                Link 6
                            </a>
                        </li>
                    </ul>
                </div>
                <h1 class="h1">
                    Invista com segurança
                </h1>
                <h2 class="h2">
                    A rede Hampton by Hilton chegou ao Brasil. Faça parte desta história!
                </h2>
                <button class="btn">
                    Saiba Mais
                </button>
            </div>
            <div class="barra-fixa">
                <span class="span">
                    Hotel
                </span>
                <span class="span">
                    Check-in - Check-out
                </span>
                <span class="span">
                    Hóspedes
                </span>
                <span class="span" style="border-right: none;">
                    Cod. Promocional
                </span>
                <span class="span" style="border-right: none; 
                                          text-align: center; 
                                          text-indent: 0px; 
                                          color: #056a7d; 
                                          font-weight: bold;
                                          background-color: #ddf503;
                                          height: 100%;
                                          line-height: 46px;
                                          margin-top: 0px;">
                    Reserve
                </span>
            </div>
        </div>
        
        <?php /* for($i=0; $i < count($arrPesquisaDados); $i++) { ?>
            <a href="#"> 
                <?php 
                    echo $i . " - " . $arrPesquisaDados[$i];
                ?>
                <br/>
            </a>
        <?php } */?>

        
        <!--Conteúdo-->
        <div class="div-conteudo">
            <div class="div-destinos">
                <?php for ($i=0; $i < count($arrDestinos); $i++) { 
                    $arrDestino = explode(",", $arrDestinos[$i]); 
                ?>
                    <div class="div-cidades">
                        <img src="img/<?php echo $arrDestino[1] ?>" class="cidades-img">
                        <a href="#" class="cidades-link">
                            <?php echo $arrDestino[0] ?>
                        </a>
                        <div class="cidades-desc">
                            <?php echo $arrDestino[2] ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div style="position: relative;
                    display: block;
                    width: 100%;
                    padding-top: 40px;">

            <?php echo montarHTML($arrDestinos); ?>

        </div>


                

    </body>

    <footer class="footer" style="background-color: #8d9db6; width: 100%;   ">
        <div class="ft-div">
            <ul class="ft-ul">
                Hotelaria Brasil
                <li class="ft-li">
                    Quem Somos
                </li>
                <li class="ft-li">
                    Seu Evento
                </li>
                <li class="ft-li">
                    Contato
                </li>
            </ul>
            <ul class="ft-ul">
                Descubra
                <li class="ft-li">
                    Ofertas
                </li>
                <li class="ft-li">
                    Nossos Hotéis
                </li>
                <li class="ft-li">
                    Fidelidade
                </li>
            </ul>
            <ul class="ft-ul">
                Investimentos
                <li class="ft-li">
                    Quero Investir
                </li>
                <li class="ft-li">
                    Portal do Investidor
                </li>
            </ul>
            <ul class="ft-ul">
                Recursos
                <li class="ft-li">
                    Extranet
                </li>
                <li class="ft-li">
                    Universidade Corporativa
                </li>
                <li class="ft-li">
                    Termos de Uso   
                </li>
                <li class="ft-li">
                    Políticas de Privacidade
                </li>
            </ul>
            <ul class="ft-ul">
                Reservas
                <li class="ft-li">
                    0800 014 4040
                </li>
                <li class="ft-li">
                    reservas@hotelariabrasil.com.br
                </li>
            </ul>
        </div>
    </footer>
</html>
