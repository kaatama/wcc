<?php
    class LayoutPagina{
        
        //Construct (método padrão) (ele roda a função automaticamente)
        public function __construct(){
        }

        public function montarHeader(){
            $strHeader = "";
            $strHeader .= "<div style='position: relative;
                                     display: block;
                                     width: 100%;
                                     height: 570px;
                                     background-color: #bccad6; '>";
                $strHeader .= "<div style='position: relative;
                                        display: block;
                                        width: 1000px;
                                        height: 100%;
                                        background-color: #8d9db6;
                                        margin-left: auto;
                                        margin-right: auto;'>";                
                    $strHeader .= "<img src='' style='width: 150px; margin-top: 10px' />"; 
                    $strHeader .= "<div style='position: absolute;
                                            display: block;
                                            top: 0px;
                                            right: 0px;
                                            /*width: 350px;*/
                                            height: 40px;
                                            line-height: 40px;
                                            /*background-color: #66c2ff; */
                                            border-bottom: 1px solid #f1e3dd;'>"; 
                        $strHeader .= "<a class='links-topo' href='#' style='border-right: 1px solid #f1e3dd; margin-right: 10px;                                 padding-right: 10px;'>
                                            EXTRANET
                                        </a>"; 
                        $strHeader .= "<a class='links-topo' href='#'>
                                            PORTAL DO INVESTIDOR
                                        </a>"; 
                    $strHeader .= "</div>"; 
                    $strHeader .= "<div class='nav'>"; 
                        $strHeader .= "<ul style='margin: 0px; padding: 0px;'>"; 
                            $strHeader .= "<li class='li-nav'>
                                            <a href='#' class='link-nav'>
                                                Link 1
                                            </a>
                                        </li>"; 
                            $strHeader .= "<li class='li-nav'>
                                            <a href='#' class='link-nav'>
                                                Link 2
                                            </a>
                                        </li>"; 
                            $strHeader .= "<li class='li-nav'>
                                            <a href='#' class='link-nav'>
                                                Link 3
                                            </a>
                                        </li>"; 
                            $strHeader .= "<li class='li-nav'>
                                            <a href='#' class='link-nav'>
                                                Link 4
                                            </a>
                                        </li>"; 
                            $strHeader .= "<li class='li-nav'>
                                            <a href='#' class='link-nav'>
                                                Link 5
                                            </a>
                                        </li>"; 
                            $strHeader .= "<li class='li-nav'>
                                            <a href='#' class='link-nav'>
                                                Link 6
                                            </a>
                                        </li>"; 
                        $strHeader .= "</ul>"; 
                    $strHeader .= "</div>"; 
                $strHeader .= "</div>"; 
            $strHeader .= "</div>"; 
                  
            return $strHeader;        
        }

        public function montarContent(){
            $strBody = "";

            //Montagem da query SQL
            $sqlCadastroLer = "";
            $sqlCadastroLer .= "SELECT ";
            $sqlCadastroLer .= "id, ";
            $sqlCadastroLer .= "nome, ";
            $sqlCadastroLer .= "email, ";
            $sqlCadastroLer .= "celular ";
            $sqlCadastroLer .= "FROM cadastro_katharine_tamashiro ";

            //Parametrização
            $statementCadastro = $GLOBALS['conDB']->prepare($sqlCadastroLer);

            if($statementCadastro !== false){ 
                //Execução
                $statementCadastro->execute();
            }

            //Alocação dos resultados
            $resultadoCadastro = $statementCadastro->fetchAll();

            $strBody .= "<div class='div-conteudo'>";
                $strBody .= "<div class='div-destinos'>";
                                //Resgate de dados
                                if(!empty($resultadoCadastro)){
                                    foreach($resultadoCadastro as $linhaCadastro){
                                        $strBody .= "<div class='div-cidades'>";
                                            $strBody .= "<img src='' class='cidades-img'>";
                                            $strBody .= "<a href='#' class='cidades-link'>{$linhaCadastro['nome']}</a>";
                                            $strBody .= "<div class='cidades-desc'>{$linhaCadastro['email']}</div>";
                                        $strBody .= "</div>";
                                    }
                                }
                                else {
                                    $strBody .= "Nenhum cadastro encontrado";
                                }
                $strBody .= "</div>";
            $strBody .= "</div>";
            
            return $strBody;
        }

        public function montarFooter(){
            $strFooter = "";
            $strFooter .= "<div class='ft-div'>";
                $strFooter .= "<ul class='ft-ul'>";
                    $strFooter .= "Hotelaria Brasil";
                    $strFooter .= "<li class='ft-li'>
                                    Quem Somos
                                </li>";
                    $strFooter .= "<li class='ft-li'>
                                    Seu Evento
                                </li>";
                    $strFooter .= "<li class='ft-li'>
                                    Contato
                                </li>";
                $strFooter .= "</ul>";
                $strFooter .= "<ul class='ft-ul'>";
                $strFooter .= "Descubra";
                    $strFooter .= "<li class='ft-li'>
                                    Ofertas
                                </li>";
                    $strFooter .= "<li class='ft-li'>
                                    Nossos Hotéis
                                </li>";
                    $strFooter .= "<li class='ft-li'>
                                    Fidelidade
                                </li>";
                $strFooter .= "</ul>";
                $strFooter .= "<ul class='ft-ul'>";
                    $strFooter .= "Investimentos";
                    $strFooter .= "<li class='ft-li'>
                                    Quero Investir
                                </li>";
                    $strFooter .= "<li class='ft-li'>
                                    Portal do Investidor
                                </li>";
                $strFooter .= "</ul>";
                $strFooter .= "<ul class='ft-ul'>";
                    $strFooter .= "Recursos";
                    $strFooter .= "<li class='ft-li'>
                                    Extranet
                                </li>";
                    $strFooter .= "<li class='ft-li'>
                                    Universidade Corporativa
                                </li>";
                    $strFooter .= "<li class='ft-li'>
                                    Termos de Uso   
                                </li>";
                    $strFooter .= "<li class='ft-li'>
                                    Políticas de Privacidade
                                </li>";
                $strFooter .= "</ul>";
                $strFooter .= "<ul class='ft-ul'>";
                    $strFooter .= "Reservas";
                    $strFooter .= "<li class='ft-li'>
                                    0800 014 4040
                                </li>";
                    $strFooter .= "<li class='ft-li'>
                                    reservas@hotelariabrasil.com.br
                                </li>";
                $strFooter .= "</ul>";
            $strFooter .= "</div>";
                        
            return $strFooter;
        }

        //Limpeza
        //unset($statementCadastro);
        //unset($resultadoCadastro);
        

    }

?>