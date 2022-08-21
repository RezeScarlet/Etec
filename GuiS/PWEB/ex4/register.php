<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registrar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body class="bg-dark">
  <?php
  require_once 'navbar.html';
  require_once 'connection.php';
  ?>
  <div class="container bg-light my-3 p-5 rounded">

    <h1>Registrar</h1>

    <form action="register.php" method="POST">
        
        <div class="mt-3 col form-group">
          <label for="produto">
            <p class="fs-4 m-0">Produto:</p>
            <input type="text" id="produto" name="produto" class="form-control" required">
          </label>
        </div>
        
        <div class="my-3 col-sm-3">
          <label for="quantidade">Quantidade:</label>
          <input type="number" id="quantidade" name="quantidade" class="form-control" required>
        </div>
        
        <div class="my-3 col-sm-3">
          <label for="custo">Preço de custo:</label>
          <input step="0.01" type="number" id="custo" name="custo" class="form-control" required">
        </div>
        
        <div class="my-3 col-sm-3">
          <label for="venda">Preço de venda:</label>
          <input step="0.01" type="number" id="venda" name="venda" class="form-control" required">
        </div>
        
        <div class="my-3 btns">
          <input type="submit" value="Enviar" class="btn btn-lg m-2 text-white" style="background: #483fff;">
          <input type="reset" value="Limpar" class="btn btn-secondary btn-lg m-2">
        </div>
        
      </div>
    </form>
  </div>
    
    <?php

    if ($_POST) {
      $produto = $_POST['produto'];
      $quantidade = $_POST['quantidade'];
      $custo = $_POST['custo'];
      $venda = $_POST['venda'];

      $sql = "insert into produtos (produto, quantidade, preco_custo, preco_venda) values ('$produto', '$quantidade', '$custo', '$venda')";

      $result = mysqli_query($conexao, $sql);
      if ($result) {
        echo "Cliente cadastrado com sucesso !!!";
      } else {
        echo "Ocorreu um erro";
      }
    }

    ?>

  </div>
</body>

</html>