<?php
    ini_set('display_errors', 1); //mostra o erro

    //Importação de objetos
    require_once "obj-funcoes-tratamento.php";
    require_once "obj-cadastro-detalhes-db.php";
    require_once "include-db.php";

    //Criar instância
    $objCadastroDetalhesDB = new CadastroDetalhesDB(2);

    //Definir config
    //$objCadastroDetalhesDB->nome = "Drielle";
    //$objCadastroDetalhesDB->id = 5;
    //echo CadastroDetalhesDB::dbLer(1, 12000) . "<br>";
    echo $objCadastroDetalhesDB->dbLer() . "<br>";
    
    //Debug
    echo "Funcionando: " . "true" . "<br> ";
    echo "CadastroDetalhes01: <pre>";
    //var_dump(CadastroDetalhes);
    var_dump($objCadastroDetalhesDB);
    echo "</pre><br>"

?>