<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>

  <?php
  $codigo = $_POST["codigo"];
  require_once("conexao.php");
  $sql = "select codcliente from tb_clientes WHERE codcliente = '$codigo'";
  $result = mysqli_query($conexao, $sql);
  require_once("navbar.html");
  $numrow = mysqli_num_rows($result);

  if ($numrow >= 1) {
    $sql1 = "DELETE FROM tb_clientes where codcliente = '$codigo'";
    $result1 = mysqli_query($conexao, $sql1);
    if ($result1) {
      echo "Cliente excluido com sucesso!";
    } else {
      echo "Ocorreu um erro ao excluir o registro";
    }
  } else {
    echo "Cliente não cadastrado <br>";
  }
  ?>
  <a href="delete1.php">voltar</a>
</body>

</html>

<?php

?>