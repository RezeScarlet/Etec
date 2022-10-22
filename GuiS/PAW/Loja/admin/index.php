<?php 

  include "verifica.php";

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>Lojaaaaaaa</title>
</head>

<body>
  <?php
  include "navbar.php";
  require_once "conexao.php"
  ?>
  <div class="container bg-light text-dark p-5 my-3">
    <h1>Administração da Lojaaaaaaa</h1>
    <p>Elaborado por Guilherme de Souza Dionisio Rosseti</p>


    <div class="container mt-2">
      <div class="row">
        <?php

        $sql = "SELECT * FROM  produtos";

        $result = $conexao->prepare($sql);
        $result->execute();

        while ($linha = $result->fetch(PDO::FETCH_ASSOC)) {
          $codproduto = $linha["codigo"];
          $descricao = $linha["descricao"];
          $preco = $linha["preco"];
          $imagem = $linha["imagem"];

        ?>

          <div class="col-sm-3 mt-1">

            <div class="card text-white">
              
              <img src="../img/<?= $imagem ?>" class="card-img-top img-fluid">
              
              <div class="card-body bg-dark">

                  <p class="card-text fs-4"><?= $descricao ?></p>
                  <p class="card-text fs-5"><?= number_format($preco, 2, ",", ".") ?></p>
                  <p class="card-text"></p>

                
              </div>
            </div>

          </div>

        <?php

        }

        ?>
        </>
      </div>
    </div>

</body>

</html>