<?php

  $nome = $_POST['nome'];
  $idade= $_POST['idade'];

  if ($idade >= 16)
  {
    $situacao = "Voce já pode voltar nas proximas eleições";
  }
  else
  {
    $situacao = "Voce ainda NÃO tem direito de votar!";
  }
?>
<!DOCTYPE html>
  <html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
</head>
<body>
 <h1>Resultado Formulario 1</h1>
  <p>Nome: <?php echo $nome ?></p>
  <p>Idade: <?php echo $idade ?></p>
  <p>Situação: <?php echo $situacao ?></p>
  <p><a href="formulario.html">Voltar</a></p>
  
 </body>
</html>