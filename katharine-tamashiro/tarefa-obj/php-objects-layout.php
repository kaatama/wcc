<?php
    ini_set('display_errors', 1); //mostra o erro

    //Importação de objetos
    require_once "obj-layout-pagina.php";
    require_once "../include-db.php";

    $layoutPagina = new LayoutPagina();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
            .links-topo {
                color: #667292;
                text-decoration: none;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 14px;
            }
            .links-topo:hover {
                color: #ffffff;
            }
            .btn {
                position: absolute;
                display: block;
                border: 2px solid #ffffff;
                border-radius: 3px;
                width: 130px;
                height: 30px;
                right: 0;
                left: 0;
                margin-right: auto;
                margin-left: auto;
                line-height: 30px; /* deixar igual ao height para centralizar verticalmente*/
                bottom: 100px;
                background-color: transparent;
                color: #ffffff;
                text-align: center;
                text-decoration: none;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 16px;
            }
            .btn:hover {
                background-color: #ffffff;
                color: #667292;
            }
            .nav {
                position: absolute;
                display: block;
                right: 0;
                top: 50px;
            }
            .li-nav {
                display: inline-block;
                margin-left: 15px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
            }
            .li-nav:before {
                content: '\00a0\2022'; /* cria a bolinha*/
                color: #ffffff;
                padding: 0px;
                margin: 0px;
            }
            .li-nav:first-child:before {
                content: '';
            }
            .li-nav:hover {
                border-bottom: 2px solid #ffffff;
            }
            .link-nav {
                color: #ffffff;
                text-transform: uppercase;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 15px;
                text-decoration: none;
            }
            h1 {
                position: absolute;
                display: block;
                width: 100%;
                top: 300px;
                text-align: center;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 40px;
                color: #ffffff;
                text-transform: uppercase;
            }
            h2 {
                position: absolute;
                display: block;
                width: 100%;
                top: 375px;
                text-align: center;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 20px;
                font-weight: none;
                color: #ffffff;
            }
            .barra-fixa {
                position: absolute;
                display: block;
                bottom: -35px;
                margin-left: auto;
                margin-right: auto;
                left: 0;
                right: 0; 
                width: 1000px;
                box-sizing: border-box;
                height: 70px;
                background-color: #ffffff;
                border: 12px solid #056a7d;
            }
            .span {
                position: relative;
                display: inline-block;
                box-sizing: border-box;
                width: 20%;
                height: 20px;
                font-family: Arial, Helvetica, sans-serif;
                color: #999999;
                text-decoration: none;
                text-indent: 20px;
                border-right: 1px solid #00000000;
                margin-top: 12px;
            }
            .div-conteudo {
                position: relative; 
                display: block; 
                width: 100%; 
                margin-top: 70px;
            }
            .div-destinos {
                position: relative;
                display: block;
                width: 1000px;
                height: 100%;
                margin-left: auto;
                margin-right: auto;
                text-align: center;
            }
            .div-cidades {
                position: relative;
                display: inline-block;
                width: 300px;
                text-align: left;
                margin-left: 20px;
                margin-bottom: 20px;
                vertical-align: top;
            }
            .cidades-img {
                position: relative;
                display: block;
                width: 300px;
                height: 150px;
            }
            .cidades-link {
                position: relative;
                display: block;
                color: #000000;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 16px;
                text-decoration: none;
                font-weight: bold;
                color: #003f4e;
                margin-top: 10px;
                margin-bottom: 5px;
            }
            .cidades-desc {
                position: relative;
                display: block;
                color: #00a8a7;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 14px;
            }
            .ft-div {
                height: 150px;
                width: 75%;
                margin: auto;
                padding-top: 20px;
            }
            .ft-ul {
                position: relative;
                display: inline-grid;
            }
            .ft-li {
                text-decoration: none;
            }
        </style>
</head>
<body>
    <?php echo $layoutPagina->montarHeader(); ?>
    <?php echo $layoutPagina->montarContent(); ?>
    <?php echo $layoutPagina->montarFooter(); ?>
</body>
</html>
<?php
    $conDB = null;
?>