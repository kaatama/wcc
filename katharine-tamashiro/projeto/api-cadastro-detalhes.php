<?php
    class ApiCadastroDetalhes{
        public $cpf;
        public $email;
        public $resultadoCadastroLer;

        //Construct.
        public function __construct($_cpf = "", $_email = ""){
            $this->cpf = $_cpf;
            $this->email = $_email;

            $this->cadastrosLer();
        }

        public function cadastrosLer()
        {
            $sqlCadastroLer = "";
            $sqlCadastroLer .= "SELECT ";
            $sqlCadastroLer .= "id, ";
            $sqlCadastroLer .= "nome, ";
            $sqlCadastroLer .= "data_nascimento, ";
            $sqlCadastroLer .= "renda, ";
            $sqlCadastroLer .= "sexo, ";
            $sqlCadastroLer .= "celular ";
            $sqlCadastroLer .= "FROM pravaler_katharine_tamashiro ";
            $sqlCadastroLer .= "WHERE (cpf = :cpf) ";
            $sqlCadastroLer .= "OR email = :email";

            //Parametrização.
            $statementCadastro = $GLOBALS["conDB"]->prepare($sqlCadastroLer);

            if($statementCadastro !== false)
            {
                $statementCadastro->bindParam(":cpf", $this->cpf, PDO::PARAM_STR);
                $statementCadastro->bindParam(":email", $this->email, PDO::PARAM_STR);

                //Execução.
                $statementCadastro->execute();
            }

            //Alocação dos resultados.
            // $resultadoCadastro = $statementCadastro->fetchAll();
            $resultadoCadastro = $statementCadastro->fetchAll(PDO::FETCH_CLASS);

            $this->resultadoCadastroLer = $resultadoCadastro;

            //Limpeza.
            unset($statementCadastro);
            unset($resultadoCadastro);
        }
    }
?>
