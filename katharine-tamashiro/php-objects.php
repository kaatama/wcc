<?php
    ini_set("display_errors", 1); //erros

    //Importação de obj
    require_once "obj-cadastro-detalhes.php"; //require_once = obrigatório esse arquivo para rodar, ignora se for adicionado novamente

    

    //Lógica
    $objCadastroDetalhes = new CadastroDetalhes();
    //echo "objCadastroDetalhes (nome): " . $objCadastroDetalhes->nome . "<br>";
    $objCadastroDetalhes->imprimirDados();
    echo "#####################################################################<br><br>";
    $objCadastroDetalhes->mudarNome("Janaina");
    echo "objCadastroDetalhes (nome modificado): " . $objCadastroDetalhes->nome . "<br><br>";
    echo "#####################################################################<br><br>";
    $objCadastroDetalhes->mudarDados("Katharine T", "katharine@pravaler.com", "11 976534444");
    //echo "objCadastroDetalhes (nome modificado): " . $objCadastroDetalhes->nome . "<br>";
    //echo "objCadastroDetalhes (email modificado): " . $objCadastroDetalhes->email . "<br>";
   // echo "objCadastroDetalhes (celular modificado): " . $objCadastroDetalhes->celular . "<br><br>";
    $objCadastroDetalhes->imprimirDados();
    echo "#####################################################################<br><br>";
    $objCadastroDetalhes->mudarDadosEimprimir("teste", "teste@teste.com", "1111111", true);
    //Debug
    echo "funcionamento: " . "true" . "</br>";
    
    echo "objCadastroDetalhes (cel): " . $objCadastroDetalhes->celular . "<br>";
    echo "CadastroDetalhes: <pre>";
    //var_dump(CadastroDetalhes);
    var_dump($objCadastroDetalhes);
    echo "</pre><br>"
?>