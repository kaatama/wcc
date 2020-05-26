<?php
 

    Route::set("sobre", function(){
        //Executar função
        Sobre::CreateView("sobre");
    });

    Route::set("contato", function(){
        //Executar função
        Contato::CreateView("contato");
    });
?>