<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="responsivo.css" />
    <title>Confirme sua presença </title>
  
</head>

<body>
          <div class="caixa">   
        <h4><ins>Olá, você pode tirar uma dúvida?</ins></h4>

        <form action="cadastrar.php" method="post">
            <label>Nome:</label>
            <input type="text" name="nome" required>

           <label>Você vai participar da minha festa de aniversário?</label>
            
            <label>Sim</label><input type="radio"  name="resposta" value="sim" >
           
          <label>Não</label><input type="radio" name="resposta" value="nao" >
            

            <input class="botao" type="submit" value="ENVIAR">
        </form>

    </div>

</body>

</html>