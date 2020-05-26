<?php
  ini_set('display_errors', 1); //erros

  //DB.
  require_once "include-db.php";

  //Objetos.
  require_once "api-cadastro-detalhes.php";

  //Resgate das informações.
  $cpf = $_GET["cpf"];
  $email = $_GET["email"];

  //Lógica.
  $objApiCadastroDetalhes = new ApiCadastroDetalhes($cpf, $email);

  $objApiCadastroDetalhesResultado = $objApiCadastroDetalhes->resultadoCadastroLer;

  //Conversão em json.
  $jsonApiCadastroDetalhesResultado = json_encode($objApiCadastroDetalhesResultado);

    //Impressão do json.
    echo $jsonApiCadastroDetalhesResultado;

  //Limpeza.
  $conDB = null;
?>
