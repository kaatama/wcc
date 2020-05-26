<?php
ini_set('display_errors', 1); //erros

$paginaConsulta = "https://swapi.co/api/planets/";



//cURL - inicializar.
$cURLConsulta = curl_init();

//Configurações.
curl_setopt($cURLConsulta, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($cURLConsulta, CURLOPT_RETURNTRANSFER, true);

//Vinculação.
curl_setopt($cURLConsulta, CURLOPT_URL, $paginaConsulta);

//Execução.
$curlResultado = curl_exec($cURLConsulta);

//Conversão dos dados json.
$arrCurlResultado = json_decode($curlResultado, true);



/**/foreach($arrCurlResultado["results"] as $arrResults)
{

    echo $arrResults["name"];
    echo "<br />";
    echo number_format((float)$arrResults["population"]);
    echo "<br />";

    echo "<pre>";
    var_dump($arrResults["residents"]);
    echo "</pre>";

    $arrLinksResidentes = $arrResults["residents"];
    foreach($arrLinksResidentes as $linkResidents)
    {
        //alocação do link
        $paginaConsultaResidents = $linkResidents;


        //cURL - inicializar.
        $cURLConsultaResidents = curl_init();

        //Configurações.
        curl_setopt($cURLConsultaResidents, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($cURLConsultaResidents, CURLOPT_RETURNTRANSFER, true);

        //Vinculação.
        curl_setopt($cURLConsultaResidents, CURLOPT_URL, $paginaConsultaResidents);

        //Execução.
        $curlResultadoResidents = curl_exec($cURLConsultaResidents);

        //Conversão dos dados json.
        $arrCurlResultadoResidents = json_decode($curlResultadoResidents, true);




        echo $linkResidents;
        echo "<br />";


        echo $arrCurlResultadoResidents["name"];
        echo "<br />";

        //echo "arrCurlResultadoResidents: <pre>";
        //var_dump($arrCurlResultadoResidents);
        //echo "</pre><br />";
                
    }


    echo "<br />";
    echo "<br />";





    //Debug.
    /*echo "arrResults: <pre>";
    var_dump($arrResults);
    echo "</pre>";*/
}




//Debug.
/*echo "curlResultado: <pre>";
var_dump($curlResultado);
echo "</pre><br />";


echo "arrCurlResultado: <pre>";
var_dump($arrCurlResultado);
echo "</pre><br />";*/

?>