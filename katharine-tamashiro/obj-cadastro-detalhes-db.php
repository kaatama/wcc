<?php
    class CadastroDetalhesDB{
        public $id = 0;
        public $nome = "";
        public $email = "";
        public $celular = "";
        public $renda = 1000;

        //Construct (método padrão) (ele roda a função automaticamente)
        public function __construct($_id = 0, 
                                    $_nome = "", 
                                    $_email = "", 
                                    $_celular = ""){
            $this->id = $_id;
            $this->nome = $_nome;
            $this->email = $_email;
            $this->celular = $_celular;
            //$this->renda = $_renda;
        }

        //public function dbLer($id, $renda){
        public function dbLer(){
            //Variáveis
            $strRetorno = "";
            $idCadastro = $this->id;

            //Montagem da query SQL
            $sqlCadastroLer = "";
            $sqlCadastroLer .= "SELECT ";
            $sqlCadastroLer .= "id, ";
            $sqlCadastroLer .= "nome, ";
            $sqlCadastroLer .= "email, ";
            $sqlCadastroLer .= "celular ";
            $sqlCadastroLer .= "FROM cadastro_katharine_tamashiro ";
            if ($idCadastro != ""){
                $sqlCadastroLer .= "WHERE id = :id";
            }else {
                $sqlCadastroLer .= "WHERE id = 0";
                //exit("Não existem registros"); //Desvantagem desse método é que a mensagem aparecerá numa pág em branco, sem layout
            }   

            //Parametrização
            $statementCadastro = $GLOBALS['conDB']->prepare($sqlCadastroLer);

            if($statementCadastro !== false){ //!== significa que o obj precisa ser qualquer coisa diferente de false, não necessariamente que é true
                //Parâmetros
                if ($idCadastro != ""){
                    //$statementCadastro->bindParam(":id", $id, PDO::PARAM_STR);
                    $statementCadastro->bindParam(":id", $idCadastro, PDO::PARAM_STR);
                }

                //Execução
                $statementCadastro->execute();
            }

            //Alocação dos resultados
            $resultadoCadastro = $statementCadastro->fetchAll();

            //Resgate de dados
            foreach($resultadoCadastro as $linhaCadastro){
                $strRetorno .= "id: " . $linhaCadastro["id"] . "<br>";
                $strRetorno .= "nome: " . $linhaCadastro["nome"] . "<br>";
                $strRetorno .= "email: " . $linhaCadastro["email"] . "<br>";
                $strRetorno .= "celular: " . $linhaCadastro["celular"] . "<br>";
                $strRetorno .= "renda: " . FuncoesTratamento::tratamentoMonetario($this->renda) . "<br>";
            }

            return $strRetorno;
        }
    }
?>