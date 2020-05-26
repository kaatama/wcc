<?php
    ini_set('display_errors', 1); //mostra o erro

    //Importação obj
    require_once "obj-funcoes-tratamento.php";
    require_once "obj-cadastro-detalhes.php";

    //Criar Instância
    $objCadastroDetalhes01 = new CadastroDetalhes();


    //Debug
    echo "Funcionando: " . "true" . "<br> ";
    //echo "FuncoesTratamento::tratamentoMonetario(): " . FuncoesTratamento::tratamentoMonetario(12008) . "<br> ";
    echo "Funcionando: " . $objCadastroDetalhes01->nome . "<br>";
    echo "Funcionando: " . FuncoesTratamento::tratamentoMonetario($objCadastroDetalhes01->renda) . "<br>";
    echo "CadastroDetalhes01: <pre>";
    //var_dump(CadastroDetalhes);
    var_dump($objCadastroDetalhes01);
    echo "</pre><br>"
    
?>