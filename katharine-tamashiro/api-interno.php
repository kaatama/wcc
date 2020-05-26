<?php
    ini_set('display_errors', 1); //erros

    $paginaConsulta = "http://wcc.com.br.solidcp.temp-address.com/katharine-tamashiro/api/api-cadastro-listagem.php?token=abc";
    
    //cURL - inicializar.
    $curlConsulta = curl_init();
    
    //Configurações.
    curl_setopt($curlConsulta, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curlConsulta, CURLOPT_RETURNTRANSFER, true);
    
    //Vinculação.
    curl_setopt($curlConsulta, CURLOPT_URL, $paginaConsulta);
    
    //Execução.
    $curlResultado = curl_exec($curlConsulta);
    
    //Conversão dos dados json.
    $arrCurlResultado = json_decode($curlResultado); //ta com erro
    
    foreach($arrCurlResultado as $teste)
    {
        echo($teste);
    }

    
?>