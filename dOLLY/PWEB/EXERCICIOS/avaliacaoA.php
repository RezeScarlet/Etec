<?php

  $nome = $_POST["nome"];
  $vendas = $_POST["vendas"];
  $salario = $_POST["salario"];


  if ($vendas > 1000) {
    $salarioFinal = $salario * 1.5;
  } else {
    $salarioFinal = $salario * 1.3;
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Avaliação - Resultado</title>
</head>
<body style="margin: 1rem">
  <output>
    
    Nome: <?php echo $nome ?> <br><br>
    Salário fixo: <?php echo $salario ?> <br><br>
    Salário do mês <?php echo $salarioFinal ?> <br<br>
    
  </output>

    



</body>
</html>