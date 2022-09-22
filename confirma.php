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
    <title>Confirme sua presença </title>

</head>

<body>
    <div class="caixa">
        <?php
        if ($_SESSION['status_cadastro']) :
        ?>
            <h4><ins>Obrigado!</ins></h4>
        <?php
            unset($_SESSION['status_cadastro']);
        else :
            unset($_SESSION['status_cadastro']);
        endif;
        ?>
        <h4><ins>Erro!</ins></h4>






        <a href="index.php"><input class="botao" type="submit" value="VOLTAR"></a>
    </div>

</body>

</html>