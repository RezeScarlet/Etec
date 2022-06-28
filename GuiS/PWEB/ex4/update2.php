<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pesquisa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body class="bg-dark">
  <?php
  require_once 'navbar.html';
  require_once 'connection.php';

  $codigo = $_POST["codigo"];
  $sql = "SELECT * FROM tb_produtos WHERE cod_produto = '$codigo'";
  $result = mysqli_query($conexao, $sql);
  $numrow = mysqli_num_rows($result);

  if ($numrow>0) {
    while ($linha = $mysqli_fetch_array($result)) {

    }
  }
  ?>
  <div class="container bg-light my-3 p-4 rounded">

    <h1 class="text-center">Insira as nova informações</h1>
    <form action="#" method="post">

      <div class="mt-3 col form-group">
        <label for="codigo">
          <p class="fs-4 m-0">Código:</p>
          <input type="text" id="codigo" name="codigo" class="form-control" readonly value="<?php echo $linha ['cod_produto']?>"></input>
        </label>
      </div>


    </form>
  </div>
</body>

</html>