<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pesquisa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <style>
    a {
      color:#483fff;
      transition: color 300ms;
      text-decoration: none;
      margin-left: 11px;
    }
    a:hover {
      color: #ff3f3f;
    }
  </style>
</head>

<body class="bg-dark">
  <?php
  require_once 'navbar.html';
  require_once 'connection.php';

  $codigo = $_POST["codigo"];
  $sql = "SELECT * FROM produtos WHERE cod_produto = $codigo";
  $result = mysqli_query($conexao, $sql);
  $numrow = mysqli_num_rows($result);

  if ($numrow > 0) {
    while ($linha = mysqli_fetch_array($result)) {
    ?>
  <div class="container bg-light my-3 p-4 rounded">

    <h1 class="text-center">Insira as nova informações</h1>
    <form action="#" method="post">

      <div class="row">
        <div class="mt-3 col-sm-1 form-group">
          <label for="codigo">
            <p class="fs-4 m-0">Código:</p>
            <input type="number" id="codigo" name="codigo" class="form-control" readonly value="<?php echo $linha["cod_produto"]; ?>"></input>
          </label> 
        </div>
        
        <div class="mt-3 col form-group">
          <label for="produto">
            <p class="fs-4 m-0">Produto:</p>
            <input type="text" id="produto" name="produto" class="form-control" required value="<?php echo $linha["produto"]; ?>"></input>
          </label>
        </div>
      </div>

        <div class="my-3 col-sm-3">
          <label for="quantidade">Quantidade:</label>
          <input type="number" id="quantidade" name="quantidade" class="form-control" required value="<?php echo $linha["quantidade"]; ?>">
        </div>

        <div class="my-3 col-sm-3">
          <label for="custo">Preço de custo:</label>
          <input step="0.01" type="number" id="custo" name="custo" class="form-control" required value="<?php echo $linha["preco_custo"]; ?>">
        </div>

        <div class="my-3 col-sm-3">
          <label for="venda">Preço de venda:</label>
          <input step="0.01" type="number" id="venda" name="venda" class="form-control" required value="<?php echo $linha["preco_venda"]; ?>">
        </div>

        <div class="my-3 btns">
          <input type="submit" value="Enviar" class="btn btn-lg m-2 text-white" style="background: #483fff;">
        </div>
    </form>
    <a href="update.php">Cancelar</a>
  </div>
</body>

</html>
<?php
}}
?>