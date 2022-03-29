<?php
  $sabor = $_POST ["sabor"];
  $nome = $_POST ["nome"];
  $quantidade = $_POST ["quantidade"];

  switch ($sabor) {
    case 0:
        $pizza = "Mussarela";
        $preco = 30.00;
        $imagem = "mussarela.jpg";
        break;
    case 1:
        $pizza = "Calabresa";
        $preco = 32.50;
        $imagem = "calabresa.jpg";
        break;
    case 2:
        $pizza = "Lombinho";
        $preco = 39.00;
        $imagem = "lombinho.jpg";
        break;
    case 3:
        $pizza = "Marguerita";
        $preco = 40.00;
        $imagem = "marguerita.png";
        break;
    case 4:
        $pizza = "Rucula";
        $preco = 38.50;
        $imagem = "rucula.jpg";
        break;
  }

  $precoFinal = $preco * $quantidade;

?>

<!DOCTYPE html>
<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pizzaria resultado</title>
  </head>
  <body>

    <div class="container">
      <h1>
        Resultados: <br>
        <p class="h5">Nome do cliente:<?php echo $nome?></p>
        <p class="h5">Pizza escolhida:<?php echo $pizza?></p>
        <p class="h5">Preço da pizza:<?php echo $preco?></p>
        <p class="h5">Total a pagar:<?php echo $precoFinal?></p>
        <p class="h5">Veja a pizza escolhida abaixo <br></p>
        <img class="img-thumbnail" src="<?php echo $imagem?>">
      </h1>
    </div>
    
  </body>
</html>