<?php
session_start()
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/responsivo.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title>Confirme sua presen&ccedil;a </title>

</head>

<body>

  <div class="caixa">
    <h4><ins>Ol&aacute;, voc&ecirc; pode me tirar uma d&uacute;vida?</ins></h4>
    <?php
    if ($_SESSION['convidado_existe']) :
    ?>
      <script>
        function funcao1() {
          swal("Convidado já respondeu! tente com outro");
        }
        funcao1();
      </script>
    <?php
    endif;
    unset($_SESSION['convidado_existe']);
    ?>
    <form action="cadastrar.php" method="post">
      <label>Nome:</label>
      <input type="text" name="nome" required>

      <label>Posso contar com sua presen&ccedil;a?</label>

      <label>Sim</label><input type="radio" name="resposta" value="sim" required>

      <label>N&atilde;o</label><input type="radio" name="resposta" value="nao">


      <input class="botao" type="submit" value="ENVIAR">
    </form>

  </div>

</body>

</html>