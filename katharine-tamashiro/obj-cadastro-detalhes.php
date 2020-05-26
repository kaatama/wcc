<?php
    class CadastroDetalhes{
        public $nome = "Rafaela";
        protected $email = "rafaela@pravaler.com.br";
        public $celular = "11 9999-9999";
        public $renda = 12500000;

        public function __construct(){

        }

        //Função
        function mudarNome($_nome){
            $this->nome = $_nome;
        }

        function mudarDados($_nome, $_email, $_celular){
            $this->nome = $_nome;
            $this->email = $_email;
            $this->celular = $_celular;
        }

        function imprimirDados(){
            echo "Nome: " . $this->nome . "<br>";
            echo "Email: " . $this->email. "<br>";
            echo "Celular: " . $this->celular. "<br><br>";
        }

        function mudarDadosEimprimir($_nome, $_email, $_celular, $imprimirTudo = false){
            $this->nome = $_nome;
            $this->email = $_email;
            $this->celular = $_celular;

            if ($imprimirTudo == true) {
                $this->imprimirDados();
            }
        }

        function outputDados($id, $modo_exibicao){
            //modoExibicao: "html" (vai montar um html dos dados) | "json" (vai montar um json dos dados) | "xml" (vai montar um xml dos dados)
            
            if($modo_exibicao == "html"){

            }

            //Lógica
        }
    }   
?>