<?php
    //ini_set('display_errors', 1); //mostra o erro

    //Criação da instância do obj
    $conDB = new PDO("mysql:host=192.175.105.180;dbname=aula_db_wcc","fic","Fic##132"); //acessar o banco de dados

    //Tentativa de conexão
    try{
        //Execução 
        $conDB->exec("set names utf8");

        //Configuração do obj
        $conDB->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $erroDB){
        echo "Erro no DB" . $erroDB->getMessage();
    }
?>