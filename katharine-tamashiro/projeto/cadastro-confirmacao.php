<?php
  ini_set('display_errors', 1); //mostra o erro

  $nome = $_POST["nome"];
  $data_nascimento = $_POST["data_nascimento"];
  $cpf = $_POST["cpf"];
  $email = $_POST["email"];
  $celular = $_POST["celular"];
  $renda = $_POST["renda"];
  $sexo = $_POST["sexo"];
  $renda_garantidor = $_POST["renda_garantidor"];

  $renda_formatada = str_replace(".", "", $renda);
  $renda_formatada = str_replace(",", ".", $renda_formatada);
  $renda_garantidor_formatada = str_replace(".", "", $renda_garantidor);
  $renda_garantidor_formatada = str_replace(",", ".", $renda_garantidor_formatada);

  $data_nascimento_formatada = str_replace('/', '-', $data_nascimento);
  $data_nascimento_formatada = date("Y-m-d", strtotime($data_nascimento));
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Pravaler | Crédito Universitário</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://www.pravaler.com.br/wp-content/uploads/2019/09/cropped-favicon-prv-32x32.png">
    <meta charset="utf-8">
    <!-- <script type="text/css" src="style.css"></script> -->
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <script src="funcoes.js"></script>
    <style type="text/css">
      body {
        margin: 0;
        font-family: Muli, Helvetica,Arial, sans-serif;
        background-image: url("img/cadastro-bg7.jpg");
        background-size: cover;
      }

      .nav-bar {
        display: block;
        height: 80px;
        width: 100%;
        background-color: #3a4950;
      }

      .nav-img {
        display: block;
        position: relative;
        left: 50%;
        top: 50%;
        height: 30px;
        transform: translate(-50%, -50%);
      }

      form {
        display: table;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        margin-top: 30px;
        padding: 20px 60px;
        background-color: rgb(172, 172, 172, 0.7);
      }

      .campos {
        margin-bottom: 20px;
      }

      .campos label {
        font-size: 20px;
        padding-left: 5px;
        padding-right: 5px;
      }

      .campos div {
        display: block;
        font-size: 18px;
        padding-left: 5px;
        padding-right: 5px;
        border-radius: 7px;
        background-color: rgb(255,255,255, 0.4);
      }

      .botoes {
        display: flex;
        margin: 0 auto;
      }

      .botao {
        display: inline-block;
        padding: 5px 20px;
        margin: 0 auto;
        font-size: 20px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #f15d22;
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px #999;
      }

      .botao:hover {
        background-color: #C3501E
      }
    </style>
  </head>
  <body>
    <div class="nav-bar">
      <img src="https://www.pravaler.com.br/wp-content/uploads/2019/08/logo-negativo.png" class="nav-img">
    </div>
    <form method="post" action="cadastro-incluir.php" onsubmit="return cadastroSucesso()">
      <h1>Confirmação de Dados</h1>
      <div class="campos">
        <label>Nome Completo:</label>
        <input type="hidden" name="nome" value=<?php echo $nome ?>>
        <div><?php echo $nome ?></div>
      </div>
      <div class="campos">
        <label>Data de Nascimento:</label>
        <input type="hidden" name="data_nascimento" value=<?php echo $data_nascimento_formatada ?>>
        <div><?php echo $data_nascimento ?></div>
      </div>
      <div class="campos">
        <label>CPF:</label>
        <input type="hidden" name="cpf" value=<?php echo $cpf ?>>
        <div><?php echo $cpf ?></div>
      </div>
      <div class="campos">
        <label>E-mail:</label>
        <input type="hidden" name="email" value=<?php echo $email ?>>
        <div><?php echo $email ?></div>
      </div>
      <div class="campos">
        <label>Celular com DDD:</label>
        <input type="hidden" name="celular" value=<?php echo $celular ?>>
        <div><?php echo $celular ?></div>
      </div>
      <div class="campos">
        <label>Renda:</label>
        <input type="hidden" name="renda" value=<?php echo $renda_formatada ?>>
        <div><?php echo $renda ?></div>
      </div>
      <div class="campos" style="display: block;">
        <label>Sexo:</label>
        <input type="hidden" name="sexo" value=<?php echo $sexo ?>>
        <div><?php echo $sexo ?></div>
      </div>
      <div class="campos">
        <label>Renda do Garantidor:</label>
        <input type="hidden" name="renda_garantidor" value=<?php echo $renda_garantidor_formatada ?>>
        <div><?php echo $renda_garantidor ?></div>
      </div>
      <div class="campos" style="display: none">
        <input display="none" type="datetime" name="data_cadastro" value="<?php echo date('Y-m-d H:i:s') ?>">
      </div>
      <div class="botoes">
        <input type="button" class="botao" name="cancel" value="Editar" onClick="window.history.back();" >
        <input type="submit" class="botao" name="continuar" value="Continuar" >
      </div>
    </form>
  </body>
  <footer>

  </footer>

</html>

