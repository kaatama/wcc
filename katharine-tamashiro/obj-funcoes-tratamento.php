<?php
    class FuncoesTratamento{
        public static function tratamentoMonetario($valor){
            //Variáveis
            $srtRetorno = $valor;
            $strInicio = "";
            $strFinal = "";

            //$srtRetorno .= number_format($valor, 2, ',', '.');

            //Lógica
            $strInicio = substr($srtRetorno, 0, strlen($srtRetorno) -2);
            $strFinal = substr($srtRetorno, strlen($srtRetorno) -2, 2);
            
            $strFormatada = $strInicio . "." . $strFinal;
            $srtRetorno = "R$ " . number_format($strFormatada, 2, ',', '.');
            //$srtRetorno = "teste de função";
            
            //Retorno de dados
            return $srtRetorno;
        } 
    }

?>